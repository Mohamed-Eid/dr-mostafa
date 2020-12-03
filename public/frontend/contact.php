<?php include("layouts/header.php") ?>

<div class="container">
  <div class="contact-clinic">
    
    <div class="row">

    <div class="clinic-contact-form col-lg-6">
      <h2 class="text-center"> Contact Us </h2>
      <ul>
        <li> <i class="far fa-envelope"></i> example_email@example.com</li>
        <li> <i class="fas fa-mobile-alt"></i> +20100322598412 </li>
      </ul>

      <form class="p-0">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
          <textarea class="form-control" placeholder="Message" rows="8"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
      </form>

    </div>

    <div class="clinic-follow text-center col-lg-6">
      <h5> Follow The Clinic </h5>
      <ul class="clinic-social">
      <li>
        <a href="" target="_blank">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank">
          <i class="fab fa-youtube"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank">
          <i class="fab fa-whatsapp"></i>
        </a>
      </li> 
      </ul>
      <div class="clinic-location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110532.89549083744!2d31.30329406893522!3d30.032468600716175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583c1380cba7ef%3A0xd541260e9e06978d!2sNasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1601175174423!5m2!1sen!2seg" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>

    </div>
  </div>
</div>

<?php include("layouts/footer.php") ?>