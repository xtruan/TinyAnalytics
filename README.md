# TinyAnalytics + Grav Plugin

<img src="http://gget.it/27cgzhtl/TinyAnalytics.png" width="900"/>

**TinyAnalytics** is a lightweight web analytics tool based on the idea that:

* The two most useful things are: **number of unique visitors per day** (with a nice chart) and **list of referers** who send some traffic to your websites,

* It should give the idea of the traffic, even for multiple websites, **on a single dashboard** (without having to click in lots of menu items to change the currently displayed website, etc.),

* It should be fast and lightweight.

If you're looking for more informations than those (such as country, browser, screen resolution, time spent on a page, etc.), then **TinyAnalytics** is not the right tool for you. Please try [Google Analytics](https://analytics.google.com), [Open Web Analytics](https://www.openwebanalytics.com/) or [Piwik](https://www.piwik.org/) instead. I personally found the two last ones [not very handy for me](http://josephbasquin.fr/aboutanalytics).

> After years, I've noticed that **I prefer to have few (important) informations that I can consult each day in 30 seconds**, rather than lots of informations for which I would need 15 or 30 minutes per day for an in-depth analysis.

## Install TinyAnalytics

There are three easy steps:

1) Unzip this package in a directory, e.g. `/var/www/html/TinyAnalytics/`.

2) Add the following tracking code to your websites at then end of `.php` files, e.g. `/var/www/html/mywebsite/index.php`:

    ~~~
    <?php 
    include '/var/www/html/TinyAnalytics/tracker.php';
    record_visit('mywebsite');
    ?>
    ~~~~

3) Modify your password in the first lines of `index.php`. Default password is `abcdef`.    

It's done! Visit at least one of your tracked websites, and open `TinyAnalytics/index.php` in your browser!

## Install Grav Plugin (after installing TinyAnalytics)

1) Create a symlink from the Grav plugins directory to the tiny-analytics plugin: `ln -s /var/www/html/TinyAnalytics  /var/www/html/user/plugin/tiny-analytics`.

2) Enable processing of twigs in pages and disable caching of twigs in Grav's system.yaml (or via the configuration page in the Admin plugin).

3) On each page you want to track, add the following: `{{ ta_record_visit('mypage') }}`.

It's done! Visit at least one of your tracked websites, and open `TinyAnalytics/index.php` in your browser!

## About

Author: Joseph Ernest ([@JosephErnest](https://twitter.com/JosephErnest))

Other projects: [BigPicture](http://bigpicture.bi), [bigpicture.js](https://github.com/josephernest/bigpicture.js), [AReallyBigPage](https://github.com/josephernest/AReallyBigPage), [SamplerBox](http://www.samplerbox.org), [Void](http://www.thisisvoid.org), [TalkTalkTalk](https://github.com/josephernest/TalkTalkTalk), [YellowNoiseAudio](http://www.yellownoiseaudio.com), [bloggggg](https://github.com/josephernest/bloggggg), etc.

Thanks to [WhiteHat](http://stackoverflow.com/users/5090771/whitehat) for his help on the chart visualization design.

## Other versions

Here is [PHP-only version](https://github.com/benyafai/TinyAnalytics) contributed by @benyafai.

The [Grav plugin version](https://github.com/xtruan/TinyAnalytics) was contributed by @xtruan.

## License

MIT license
