@extends('layouts.home')

@section('title', 'İletişim')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <h2>Bize Ulaşın</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="container">
            <div class="row">
                <div class="span8">
                    <h4>Formu doldurarak bizimle iletişime geçebilirsiniz</h4>

                    <div id="sendmessage">Mesaj gönderildi.Teşekkürler!</div>
                    <div id="errormessage"></div>

                    <form action="" method="post" role="form" class="contactForm">
                        <div class="row">
                            <div class="span4 form-group field">
                                <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>

                            <div class="span4 form-group">
                                <input type="email" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="span8 form-group">
                                <input type="text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="span8 form-group">
                  <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                            placeholder="Message"></textarea>
                                <div class="validation"></div>
                                <div class="text-center">
                                    <button class="btn btn-theme btn-medium margintop10" type="submit">Gönder</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="span4">
                    <div class="clearfix"></div>
                    <aside class="right-sidebar">

                        <div class="widget">
                            <h5 class="widgetheading">İletişim Bilgileri<span></span></h5>

                            <ul class="contact-info">
                                <li><label>Address :</label> {{$setting->address}}
                                <li><label>Phone :</label> {{$setting->phone}}
                                <li><label>Fax : </label> {{$setting->fax}}
                                <li><label>Email : </label> {{$setting->email}}
                            </ul>

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection

