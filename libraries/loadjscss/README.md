# Dynamic CSS and JS loader

This small utility will help to load css and js files dynamically/asynchronously. 

###Features:
  - Load css files from server
  - Loads js files from server
  - Apply callback method after css/js file are loaded
  - Support to add media for css
  - Guarding against duplicate file loading from server(include id)

### Version
1.0.0

### Installation
##### Manually
Download the loadjscss.js file from here and include in your html.
```sh
<script type="application/javascript" src="loadjscss.js"></script>
```

##### Through Bower
Download via bower
```sh
$ bower install loadjscss
```
and then add in your html
```sh
<script type="application/javascript" src="bower_components/loadjscss/loadjscss.js"></script>
```
###Usage
#####Load CSS File
Use either one of the following way:
1. Simple file load
```sh
loadcss('http://cdn.sstatic.net/stackoverflow/all.css?v=3111ce3d4bb4');
```
2. With id (Recommended to avoid duplicate file loading)
```sh
loadcss('http://cdn.sstatic.net/stackoverflow/all.css?v=3111ce3d4bb4', 'stackCssId');
```
3. With media
```sh
loadcss('http://cdn.sstatic.net/stackoverflow/all.css?v=3111ce3d4bb4', 'stackCssId', "screen");
```
4. With callback
```sh
loadcss('http://cdn.sstatic.net/stackoverflow/all.css?v=3111ce3d4bb4', 'stackCssId', "screen", function () {
            alert('Hi after loading css');
        });
```
#####Load Javascript File
Use ither one of the following way:
1. Simple file load
```sh
loadjs("test.js");
```
2. With id (Recommended to avoid duplicate file loading)
```sh
loadjs("test.js", "firstJsId");
```
4. With callback
```sh
loadjs("test.js", "firstJsId", function () {
        alert('Hi after loading javascript');
    });
```
### API Doc
* [See here (Pretty View)](http://cdn.rawgit.com/sustbird/loadjscss/master/api-doc/index.html)
* [See here (served by Markdown)](loadjscss.md)

### Files Included:
* loadjscss.js [main library file]
* loadjscss.min.js [minified library file]
* index.html [test html file]
* loadjscss.md [api doc file]

### Development

Want to contribute? Great! Code and create a pull request
License
----

MIT

