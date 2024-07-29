<style>
@import url('https://fonts.googleapis.com/css?family=Hind:300,400&display=swap');

* {
    box-sizing: border-box;
}

*::before,
*::after {
    box-sizing: border-box;
}

/* body {
  margin: 0;
  padding: 0;
  font-family: 'Hind', sans-serif;
  background: #820eb7;
  color: #fff;
  display: flex;
  min-height: 100vh;
}  */
.container {
    margin: 0 auto;
    padding: 0rem;
    width: 90%;
    color: #fff;
}

.accordion .accordion-item {
    border-bottom: 1px solid #fff;
}

.accordion .accordion-item button[aria-expanded='true'] {
    border-bottom: 1px solid #fff;
}

.accordion button {
    position: relative;
    display: block;
    text-align: left;
    width: 100%;
    padding: 1em 0;
    color: #ffff;
    font-size: 1.15rem;
    font-weight: 400;
    border: none;
    background: none;
    outline: none;
}

.accordion button:hover,
.accordion button:focus {
    cursor: pointer;
    color: #f2f2f2;
}

.accordion button:hover::after,
.accordion button:focus::after {
    cursor: pointer;
    color: #f2f2f2;
    border: 1px solid #f2f2f2;
}

.accordion button .accordion-title {
    padding: 1em 1.5em 1em 0;
    font-weight: bold;
    color: #f2f2f2;
}

.accordion button .icon {
    display: inline-block;
    position: absolute;
    /* top: 18px; */
    right: 0;
    width: 22px;
    height: 22px;
    border: 1px solid;
    border-radius: 22px;
    font-weight: bold;
}

.accordion button .icon::before {
    display: block;
    position: absolute;
    content: '';
    top: 9px;
    left: 5px;
    width: 10px;
    height: 2px;
    background: currentColor;
}

.accordion button .icon::after {
    display: block;
    position: absolute;
    content: '';
    top: 5px;
    left: 9px;
    width: 2px;
    height: 10px;
    background: currentColor;
}

.accordion button[aria-expanded='true'] {
    color: #f2f2f2;
}

.accordion button[aria-expanded='true'] .icon::after {
    width: 0;
}

.accordion button[aria-expanded='true']+.accordion-content {
    opacity: 1;
    max-height: 15em;
    transition: all 200ms linear;
    will-change: opacity, max-height;
}

.accordion .accordion-content {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: opacity 200ms linear, max-height 200ms linear;
    will-change: opacity, max-height;
}

.accordion .accordion-content p {
    font-size: 1rem;
    font-weight: 300;
    margin: 2em 0;
    color: #c8c2c2;
}
</style>





<div class="container">
    <!-- <h2>Frequently Asked Questions</h2> -->
    <div class="accordion">
        <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false">
                <span class="accordion-title">What services does Onyxz Services Ltd offer?</span>
                <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
                <p>
                    We offer real estate, energy, financial, and procurement and supply chain services.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false">
                <span class="accordion-title">How can I contact Onyxz Services Ltd for inquiries or partnerships?</span>
                <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
                <p>
                    Contact us at <a href="tel:+234 908 8998 821" style="color: #f2f2f2;">+234 908 8998 821</a> or
                    <a href="mailto:customer@Onyxzservices.com." style="color: #f2f2f2;">customer@Onyxzservices.com</a>
                    or
                    Visit us at 16A Jaiye Oyedotun
                    Street, Magodo Estate Phase 2, Lagos Nigeria.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false">
                <span class="accordion-title">What sets Onyxz Services Ltd apart from other companies?</span>
                <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
                <p>
                    Our diverse services, experienced team, commitment to innovation, strong partnerships, and
                    exceptional customer service.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false">
                <span class="accordion-title">Where is Onyxz Services Ltd located?</span>
                <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
                <p>
                    The head office of Onyxz Services Ltd is located at 16A Jaiye Oyedotun Street, Magodo Estate Phase
                    2, Shangisha, Lagos State. We also have offices in Port Harcourt and Abuja to better serve our
                    clients.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false">
                <span class="accordion-title">What kind of clients do you serve?</span>
                <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
                <p>
                    We serve individuals, corporate organizations, multinational companies, government agencies, and
                    parastatals in
                    Nigeria.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>