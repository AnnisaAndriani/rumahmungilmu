<?php include 'header.php'; ?>

<style>
        body {
    font-family: 'Segoe UI', sans-serif;

    
}
  .section-title {
    color: #59b6fd;
  }

  .contact-box {
    background: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease-in-out;
  }

  .contact-box:hover {
    box-shadow: 0 6px 12px rgba(0,0,0,0.05);
    transform: translateY(-4px);
  }

  .contact-item {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
    justify-content: space-between;
  }

  .contact-svg {
    width: 32px;
    height: 32px;
    flex-shrink: 0;
  }

  .contact-text h6 {
    margin: 0;
    font-weight: 600;
    color: #333;
  }

  .contact-text p {
    margin: 0;
    color: #666;
  }

  .contact-button {
    background: rgba(255, 255, 255, 0.6);
    border: 1px solid #ccc;
    padding: 8px 16px;
    border-radius: 8px;
    font-weight: 500;
    color: #333;
    text-decoration: none;
    transition: all 0.3s;
  }

  .contact-button:hover {
    background: rgba(255, 255, 255, 0.9);
    color: #000;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  .contact-row {
    flex-grow: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
</style>

<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4 section-title">Kontak Kami</h2>
    <p class="text-center mb-5">Hubungi <strong>Rumah Mungilmu</strong> lewat salah satu kanal di bawah ini.</p>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="contact-box">

          <!-- WhatsApp -->
          <div class="contact-item">
            <div class="contact-svg">
              <img src="assets/img/whatsapp.svg" alt="WhatsApp" class="img-fluid">
            </div>
            <div class="contact-row">
              <div class="contact-text">
                <h6>WhatsApp</h6>
                <!-- <p>+62 822-8198-0530</p> -->
              </div>
              <a href="https://wa.me/6282281980530" target="_blank" class="contact-button">Chat</a>
            </div>
          </div>

          <!-- Instagram -->
          <div class="contact-item">
            <div class="contact-svg">
              <img src="assets/img/instagram.svg" alt="Instagram" class="img-fluid">
            </div>
            <div class="contact-row">
              <div class="contact-text">
                <h6>Instagram</h6>
                <p>@rumah.mungilmu</p>
              </div>
              <a href="https://instagram.com/rumah.mungilmu" target="_blank" class="contact-button">Buka</a>
            </div>
          </div>

          <!-- Email --
          <div class="contact-item">
            <div class="contact-svg">
              <img src="assets/img/gmail.svg" alt="Email" class="img-fluid">
            </div>
            <div class="contact-row">
              <div class="contact-text">
                <h6>Email</h6>
                <p>kontak@rumahmungilmu.com</p>
              </div>
              <a href="mailto:kontak@rumahmungilmu.com" class="contact-button">Kirim</a>
            </div>
          </div>-->

        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
