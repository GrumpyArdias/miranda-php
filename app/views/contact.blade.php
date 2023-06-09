@extends ("layout")
@section("main")
<!-- about-Us -->
<div class="contact-container">
    <div class="contact">
        <div>
            <img src="../public/Assets/mail-icon.png" alt="" />
        </div>
        <div class="contact__addres">
            <p>Hotel Addres</p>
            <p>19/A, Cirikon City hall Tower New York, NYC</p>
        </div>
        <p class="contact__number">01</p>
    </div>

    <div class="contact">
        <div>
            <img src="../public/Assets/phone-icon.png" alt="" />
        </div>
        <div class="contact__addres">
            <p>Phone Number</p>
            <p>+97656867578647</p>
            <p>+87676686757656</p>
        </div>
        <p class="contact__number">02</p>
    </div>
    <div class="contact">
        <div>
            <img src="../public/Assets/location-icon.png" alt="" />
        </div>
        <div class="contact__addres">
            <p>Email</p>
            <p>info@webmail.com</p>
            <p>jobs.webmail@mail.com</p>
        </div>
        <p class="contact__number">03</p>
    </div>
</div>
<div class="contact-img">
    <img src="../public/Assets/maps.png" alt="bahamas maps" />
</div>

<form class="contact-form" method="post">
    <div class=" contact-form__input-container">
        <input type="text" placeholder="Your full name" name="fullName" />
        <img src="../public/Assets/icon/contact/human.png" alt="" />
    </div>
    <div class="contact-form__input-container">
        <input type="text" placeholder="Add phone number" name="phone" />
        <img src="../public/Assets/icon/contact/phone.png" alt="" />
    </div>
    <div class="contact-form__input-container">
        <input type="text" placeholder="Enter email address" name="email" />
        <img src="../public/Assets/icon/contact/email.png" alt="" />
    </div>
    <div class="contact-form__input-container">
        <input type="text" placeholder="Enter subject" name="subject" />
        <img src="../public/Assets/icon/contact/book.png" alt="" />
    </div>
    <div class="contact-form__input-container">
        <textarea rows="10" cols="22" name="message"></textarea>
        <img src="../public/Assets/icon/contact/pencil.png" alt="" />
    </div>
    <button class="contact-form__submit" type="submit">Send</button>
</form>




@endsection