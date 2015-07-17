/**
 * @fileOverview Utility functions to load css and js files dynamically.
 * @author <a href="mailto:sustbird@gmail.com">Shafiul</a>
 * @version 1.0.0
 * @license MIT
 */

/*global
 document, Function, undefined
 */

/**
 * Appends the file node in html (Don't use this function, its for private use only)
 *
 * @param {HTMLElement} fileRef file node
 * @param {string} [id] link tag id (Used to avoid duplicate file loading)
 */
function loadFile(fileRef, id) {
    'use strict';
    if (id) {
        fileRef.setAttribute("id", id);
    }
    //load only if no id given or the file does not exists
    if ((!id || !document.getElementById(id)) && (typeof fileRef !== undefined)) {
        document.getElementsByTagName("head")[0].appendChild(fileRef);
    }
}

/**
 * Load a javascript file asynchronously
 *
 * @param {string} fileUrl Url of the file to load
 * @param {string} [id] link tag id (Used to avoid duplicate file loading)
 * @param {function} [callback] function
 */
function loadjs(fileUrl, id, callback) {
    'use strict';

    var fileRef = document.createElement('script');
    fileRef.setAttribute("type", "text/javascript");
    fileRef.setAttribute("src", fileUrl);
    loadFile(fileRef, id);

    if (callback && (typeof (callback) === typeof (Function))) {
        //For most browsers
        fileRef.onload = callback;

        //For IE 6 & 7
        fileRef.onreadystatechange = function () {
            if (this.readyState === 'complete') {
                callback();
            }
        };
    }

}

/**
 * Load a css file asynchronously
 *
 * @param {string} fileUrl Url of the file to load
 * @param {string} [id] link tag id (Used to avoid duplicate file loading)
 * @param {string} [media] media instruction for css
 * @param {function} [callback] function
 */
function loadcss(fileUrl, id, media, callback) {
    'use strict';
    var fileRef, dummyImage;
    fileRef = document.createElement("link");
    fileRef.setAttribute("rel", "stylesheet");
    fileRef.setAttribute("type", "text/css");
    fileRef.setAttribute("href", fileUrl);
    if (media) {
        fileRef.setAttribute("media", media);
    }

    loadFile(fileRef, id, callback);

    if (callback && (typeof (callback) === typeof (Function))) {
        dummyImage = document.createElement('img');
        dummyImage.onerror = function () {
            if (callback && (typeof (callback) === typeof (Function))) {
                callback();
            }
        };
        dummyImage.src = fileUrl;
    }
}
