# Last.fm Now Playing Widget - Rework by wlanowski

A simple widget that displays a user's currently played song on [last.fm](http://last.fm).

This work is based on the [Last.fm Now Playing Widget by cj123](https://github.com/cj123/lastfm-nowplaying-widget) (MIT-License)

## Usage

* load the last.fm widget in an iframe (recommended). e.g. for html5 doctype
 ```html
 <iframe src="https://wlanowski.de/lastfmwidget/plugin.php?username=<user>" scrolling="no" height="300px"></iframe>
 ```

* replacing `<user>` with your username 
* If you wish to prevent autorefresh, add `&autorefresh=no`

## Demo
[Link](https://wlanowski.de/lastfmwidget/plugin.php?username=wlanowski)


## Credits and used software:
* [Last.fm Now Playing Widget by cj123](https://github.com/cj123/lastfm-nowplaying-widget) (MIT-License)
* [Font Awesome](https://fontawesome.com/)
* jQuery

Feel free to fork and customize to your requirements!

## Host on your own server
* Upload the content of this repo to your webserver.
* Get your own Last.fm-API-Key [here](https://www.last.fm/api/account/create).
* Insert your API-Key on line 6 of `include/model.php`.
* Insert your prefered username in line 9 of `include/model.php`.
* Change the widget.css to your requirements.