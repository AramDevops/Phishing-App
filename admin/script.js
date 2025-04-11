/*
 * Educational Phishing Demonstration
 * ----------------------------------------
 * Programme: AEC Cybersécurité : protection et défense
 *
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

// Load data from JSON files
async function loadData() {
  try {
    // Fetch cards data
    const cardsResponse = await fetch("../data/cards.json");
    if (!cardsResponse.ok) {
      throw new Error(`HTTP error! status: ${cardsResponse.status}`);
    }
    cardsData = await cardsResponse.json();

    // Fetch questions data
    const questionsResponse = await fetch("../data/questions.json");
    if (!questionsResponse.ok) {
      throw new Error(`HTTP error! status: ${questionsResponse.status}`);
    }
    questionsData = await questionsResponse.json();

    // Display the data and update stats
    displayCards(cardsData);
    updateStats(cardsData, questionsData);
  } catch (error) {
    console.error("Error loading data:", error);
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
                    </div>
                    <div class="card-actions">
                        <button class="btn btn-primary" onclick="openQuestionsModal('${
                          card.session_id
                        }')">See Security Questions</button>
                    </div>
                `;

    cardGrid.appendChild(cardElement);
  });
}

// Update stats
function updateStats(cards, questions) {
  document.getElementById("total-cards").textContent = cards.length;
  document.getElementById("total-responses").textContent = questions.length;
}

// Open modal with security questions for a specific session
function openQuestionsModal(sessionId) {
  const modal = document.getElementById("questionsModal");
  const container = document.getElementById("questions-container");
  container.innerHTML =
    '<div class="loading-spinner"><div class="spinner"></div><p>Loading questions...</p></div>';

  modal.style.display = "block";

  setTimeout(() => {
    // Filter questions for this session
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

        // Format date
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
                                    <div>${
                                      questionMap[entry.question1] ||
                                      entry.question1
                                    }</div>
                                    <div class="question-label">Answer:</div>
                                    <div>${entry.answer1}</div>
                                </div>
                                <div class="question-item">
                                    <div class="question-label">Question 2:</div>
                                    <div>${
                                      questionMap[entry.question2] ||
                                      entry.question2
                                    }</div>
                                    <div class="question-label">Answer:</div>
                                    <div>${entry.answer2}</div>
                                </div>
                                <div class="question-item">
                                    <div class="question-label">Question 3:</div>
                                    <div>${
                                      questionMap[entry.question3] ||
                                      entry.question3
                                    }</div>
                                    <div class="question-label">Answer:</div>
                                    <div>${entry.answer3}</div>
                                </div>
                            </div>
                        `;

        container.appendChild(questionDiv);
      });
    }
  }, 300); // Small delay for the loading spinner to be visible
}

// Utility function to truncate long text
function truncateText(text, maxLength) {
  if (text.length <= maxLength) return text;
  return text.substring(0, maxLength) + "...";
}

// Close modal
document.getElementsByClassName("close")[0].onclick = function () {
  document.getElementById("questionsModal").style.display = "none";
};

// Close modal when clicking outside
window.onclick = function (event) {
  const modal = document.getElementById("questionsModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Auto-refresh data every 30 seconds
function setupAutoRefresh() {
  setInterval(loadData, 30000); // 30 seconds
}

// Load data when page loads
document.addEventListener("DOMContentLoaded", () => {
  loadData();
  setupAutoRefresh();
});
