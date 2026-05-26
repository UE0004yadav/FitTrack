// Select Buttons

const buttons =
document.querySelectorAll(".dashboard-btn");

// Select Sections

const sections =
document.querySelectorAll(".tab-content");

// Button Click Event

buttons.forEach(button => {

    button.addEventListener("click", () => {

        // Remove Active Button

        buttons.forEach(btn => {

            btn.classList.remove("active");

        });

        // Remove Active Section

        sections.forEach(section => {

            section.classList.remove("active");

        });

        // Active Button

        button.classList.add("active");

        // Get Target Section

        const target =
        button.getAttribute("data-tab");

        // Show Target Section

        document
        .getElementById(target)
        .classList.add("active");

    });

});