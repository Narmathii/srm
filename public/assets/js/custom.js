document.addEventListener("DOMContentLoaded", function () {
  const currentPath = window.location.pathname.replace(/^\/+|\/+$/g, ""); // remove leading/trailing slashes
  console.log(currentPath);

  const menuItems = document.querySelectorAll(".main-menu li a");

  menuItems.forEach((link) => {
    const hrefPath = link
      .getAttribute("href")
      .replace(/^\/+|\/+$/g, "")
      .replace(window.location.origin + "/", "");

    // exact match or home page check
    if (
      currentPath === hrefPath ||
      (currentPath === "" && hrefPath === "Index.php")
    ) {
      link.parentElement.classList.add("active");
    }

    // submenu logic: highlight parent <li> if child is active
    if (
      link.closest(".submenu") &&
      link.parentElement.classList.contains("active")
    ) {
      const parentLi = link.closest("li").parentElement.closest("li");
      if (parentLi) {
        parentLi.classList.add("active");
      }
    }
  });
});


function sendWhatsAppMessage({ contact, message, product = "" }) {
  if (!contact || !message) {
    alert("Please fill in all required fields.");
    return;
  }

  const phone = "919488522011"; // Your WhatsApp number here

  let messageLines = [`Hello, I'm submitting an enquiry.`];

  if (product) messageLines.push(`Product: ${product}`);
  messageLines.push(`Contact: ${contact}`);
  messageLines.push(`Message: ${message}`);

  const waMessage = encodeURIComponent(messageLines.join("\n"));
  const whatsappUrl = `https://wa.me/${phone}?text=${waMessage}`;

  window.open(whatsappUrl, "_blank");

  // Reset form fields after sending
  document.getElementById("product-name").value = "";
  document.getElementById("product-recipient-name").value = "";
  document.getElementById("product-message-text").value = "";

  // Optional: Close the modal after sending
  const modalEl = document.getElementById("exampleModal");
  const modalInstance = bootstrap.Modal.getInstance(modalEl);
  if (modalInstance) {
    modalInstance.hide();
  }
}

// Trigger on modal button click
document.addEventListener("DOMContentLoaded", function () {
  const sendButton = document.querySelector(".msg-send-btn");

  if (sendButton) {
    sendButton.addEventListener("click", function () {
      const product = document.getElementById("product-name").value.trim();
      const contact = document
        .getElementById("product-recipient-name")
        .value.trim();
      const message = document
        .getElementById("product-message-text")
        .value.trim();

      sendWhatsAppMessage({ contact, message, product });
    });
  }
});
