<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Turn Out Mag - Contact</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/frontend/style.css')}}" />
        <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->
    </head>
    <body>
        <!-- BEGIN wrapper -->
        <div id="wrapper">
            <!-- BEGIN header -->
            <div id="header">
                <ul>
                    <li><a href="{!! route('index') !!}">Home</a></li>
                    <li><a href="{!! route('about') !!}">About Us</a></li>
                    <li><a href="{!! route('page') !!}">Demo Page</a></li>
                    <li><a href="{!! route('contact') !!}">Contact Page</a></li>
                </ul>
                <p class="rss"> <a href="#">Posts</a> | <a href="#">Comments</a> | <a href="#">Email</a> </p>
                <h1><a href="#">Turn Out Mag</a></h1>
                <div class="ad"><a href="#"><img src="{{ asset('/images/ad468x60.gif')}}" alt="" /></a></div>
            </div>
            <!-- END header -->
            <!-- BEGIN content -->
            <div id="content">
                <div class="single">
                    <h2>Contact Us</h2>
                    <div class="content">
                        <p>Idnec nulla fuscinia ridictus nunc et morbi at morbi senean tincidunt. Antsempus morbi quis in sempus convallis dui vestie eu phasellentesquet nam. Pulvinareipsum sit nibh id nas eu magnisse alique id nam curabitur. Etenim consequam nec ant senean leo morbi urna velit rutrum consectum. Sedpretium nulla vel ero liberos facilis dis cursus adipiscing lacus intesque.</p>
                    </div>
                </div>
                <div id="comments">
                    <div class="box" id="respond">
                        <div class="buffer">
                            <form action="#" method="post" id="commentform">
                                <p>
                                    <input type="text" name="author" id="author" value="" size="22" tabindex="1" />
                                    <label for="author"><small>Name (required)</small></label>
                                </p>
                                <p>
                                    <input type="text" name="email" id="email" value="" size="22" tabindex="2" />
                                    <label for="email"><small>Mail (will not be published) (required)</small></label>
                                </p>
                                <p>
                                    <input type="text" name="url" id="url" value="" size="22" tabindex="3" />
                                    <label for="url"><small>Website</small></label>
                                </p>
                                <p>
                                    <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
                                </p>
                                <p>
                                    <button name="submit" type="submit" id="submit">Submit Comment</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END content -->
            <!-- BEGIN sidebar -->
            <div id="sidebar">
                <!-- begin search -->
                <form action="#">
                    <input type="text" name="s" id="s" value="" />
                    <button type="submit">Search</button>
                </form>
                <!-- end search -->
                <!-- begin popular articles -->
                <div class="box">
                    <h2>Popular Articles</h2>
                    <ul>
                        <li><a href="#">Lorem Ipsum Dolor Site Amet Veritas Vos</a></li>
                        <li><a href="#">Lorem Ipsum Dolor Site Amet Veritas Vos</a></li>
                        <li><a href="#">Lorem Ipsum Dolor Site Amet Veritas Vos</a></li>
                        <li><a href="#">Lorem Ipsum Dolor Site Amet Veritas Vos</a></li>
                        <li><a href="#">Lorem Ipsum Dolor Site Amet Veritas Vos</a></li>
                    </ul>
                </div>
                <!-- end popular articles -->
                <!-- begin flickr rss -->
                <div class="box">
                    <h2>Flickr RSS</h2>
                    <p class="flickr"> <a href="#"><img src="images/thumb02.jpg" alt="" /></a> <a href="#"><img src="images/thumb03.jpg" alt="" /></a> <a href="#"><img src="images/thumb04.jpg" alt="" /></a> <a href="#"><img src="images/thumb05.jpg" alt="" /></a> <a href="#"><img src="images/thumb06.jpg" alt="" /></a> <a href="#"><img src="images/thumb07.jpg" alt="" /></a> </p>
                </div>
                <!-- end flickr rss -->
                <!-- begin featured video -->
                <div class="box">
                    <h2>Featured Video</h2>
                    <div class="video"><img src="images/video.jpg" alt="" /></div>
                </div>
                <!-- end featured video -->
                <!-- BEGIN left -->
                <div class="l">
                    <!-- begin categories -->
                    <div class="box">
                        <h2>Categories</h2>
                        <ul>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Entertainment</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </div>
                    <!-- end categories-->
                </div>
                <!-- END left -->
                <!-- BEGIN right -->
                <div class="r">
                    <!-- begin archives -->
                    <div class="box">
                        <h2>Archives</h2>
                        <ul>
                            <li><a href="#">March 2009</a></li>
                            <li><a href="#">February 2009</a></li>
                            <li><a href="#">January 2009</a></li>
                            <li><a href="#">December 2008</a></li>
                        </ul>
                    </div>
                    <!-- end archives -->
                </div>
                <!-- END right -->
            </div>
            <!-- END sidebar -->
        </div>
        <!-- END wrapper -->
        <!-- BEGIN footer -->
        <div id="footer">
            <p>Copyright &copy; 2009 - <a href="#">Website Name</a> &middot; All Rights Reserved | Template by: <a href="http://www.wpthemedesigner.com/">WordPress Designer</a> | Get More <a href="#">Free CSS Templates</a> </p>
        </div>
        <!-- END footer -->
    </body>
</html>
