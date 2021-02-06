@extends('layouts.home')

@section('title', '')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <h2>Portfolio detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <article class="noborder">
                        <div class="top-wrapper">
                            <div class="post-heading">
                                <h3><a href="#">This is an example of portfolio detail</a></h3>
                            </div>
                            <!-- start flexslider -->
                            <div class="portfolio-detail">
                                <img src="img/dummies/works/detail/1.jpg" alt="" />
                            </div>
                            <!-- end flexslider -->
                        </div>

                        <p>
                            Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                            ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
                        </p>

                    </article>

                    <div class="row">
                        <div class="span12">
                            <h4>Related works</h4>
                        </div>
                        <div class="grid related-works cs-style-4">
                            <div class="span2">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/1.jpg" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
											<a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight"></i></a>
											</span>
                                                <span>
											<a href="#"><i class="icon-file icon-circled icon-bglight"></i></a>
											</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/2.jpg" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
											<a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight"></i></a>
											</span>
                                                <span>
											<a href="#"><i class="icon-file icon-circled icon-bglight"></i></a>
											</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/3.jpg" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
											<a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight"></i></a>
											</span>
                                                <span>
											<a href="#"><i class="icon-file icon-circled icon-bglight"></i></a>
											</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/4.jpg" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
											<a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight"></i></a>
											</span>
                                                <span>
											<a href="#"><i class="icon-file icon-circled icon-bglight"></i></a>
											</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/5.jpg" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
											<a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight"></i></a>
											</span>
                                                <span>
											<a href="#"><i class="icon-file icon-circled icon-bglight"></i></a>
											</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/6.jpg" alt="" /></div>
                                        <figcaption>
                                            <div>
                          <span>
											<a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight"></i></a>
											</span>
                                                <span>
											<a href="#"><i class="icon-file icon-circled icon-bglight"></i></a>
											</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

