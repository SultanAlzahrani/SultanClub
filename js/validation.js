document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("feedbackForm");
    const errorDiv = document.getElementById("errorMessages");
  
    form.addEventListener("submit", function (e) {
      const fields = {
        first_name: form.first_name,
        last_name: form.last_name,
        email: form.email,
        city: form.city,
        feedback: form.feedback
      };
  
      let errors = [];
      let focusSet = false;
  
      // Clear previous error state
      errorDiv.innerHTML = "";
      errorDiv.style.display = "none";
  
      // Check required fields
      for (const [key, input] of Object.entries(fields)) {
        if (!input.value.trim()) {
          errors.push(`${key.replace("_", " ")} is required.`);
          if (!focusSet) {
            input.focus();
            focusSet = true;
          }
        }
      }
  
      // Check gender radio
      const genderChecked = [...form.gender].some(r => r.checked);
      if (!genderChecked) {
        errors.push("Gender must be selected.");
        if (!focusSet) {
          form.gender[0].focus();
          focusSet = true;
        }
      }
  
      if (errors.length > 0) {
        e.preventDefault();
        errorDiv.innerHTML = errors.map(msg => `<p>${msg}</p>`).join("");
        errorDiv.style.display = "block";
      }
    });
  });
  