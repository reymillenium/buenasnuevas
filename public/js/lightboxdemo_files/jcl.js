/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// jcl.js: JavaScript Common behaviours Library


// -- OpenAjax hub --

if (typeof (window.OpenAjax) == "undefined") {
// setup the OpenAjax framework - hub
window.OpenAjax = {};
        } // if

if (typeof (OpenAjax.hub) == "undefined") {

// a hub implementation
OpenAjax.hub = {
implementer: "http://www.mathertel.de/OpenAjax",
        implVersion: "0.4",
        specVersion: "0.5",
        implExtraData: {},
        // ----- library management -----

        // the list of libraries that have registered
        libraries: {},
        // Registers an Ajax library with the OpenAjax Hub. 
        registerLibrary: function (p, u, v, e) {
        var entry = { prefix: p, namespaceURI: u, version: v, extraData:e };
                this.libraries[p] = entry;
                this.publish("org.openajax.hub.registerLibrary", entry);
        },
        // Unregisters an Ajax library with the OpenAjax Hub.
        unregisterLibrary: function (p) {
        var entry = this.libraries[p];
                this.publish("org.openajax.hub.unregisterLibrary", entry);
                if (entry)
                this.libraries[p] = null;
        },
        // ----- event management -----

        _regs: {},
        _regsId: 0,
        /// name, callback, scope, data, filter
        subscribe: function (n, c, s, d, f) {
        var h = this._regsId;
                s = s || window;
                // treating upper/lowercase equal is not clearly defined, but true with domain names.
                var rn = n.toLocaleLowerCase();
                // build a regexp pattern that will match the event names
                rn = rn.replace(/\*\*$/, "\S{0,}").replace(/\./g, "\\.").replace(/\*/g, "[^.]*");
                var entry = {id:h, n:rn, c:c, s:s, d:d, f:f};
                this._regs[h] = entry;
                this._regsId++;
                return(h);
        }, // subscribe


        unsubscribe: function (h) {
        this._regs[h] = null;
        }, // unsubscribe


        publish: function (n, data) {
        if ((n) && (n.length > 0)) {
        n = n.toLocaleLowerCase();
                for (var h in this._regs) {
        var r = this._regs[h];
                if (r && (n.match(r.n))) {
        var ff = r.f; if (typeof (ff) == "string") ff = r.s[ff];
                var fc = r.c; if (typeof (fc) == "string") fc = r.s[fc];
                if ((!ff) || (ff.call(r.s, n, data, r.d)))
                fc.call(r.s, n, data, r.d);
        } // if
        } // for
        } // if
        } // publish

}; // OpenAjax.hub
        OpenAjax.hub.registerLibrary("aoa", "http://www.mathertel.de/OpenAjax", "0.4", {});
        } // if (! hub)

OpenAjax.hub.registerLibrary("jcl", "http://www.mathertel.de/Behavior", "1.2", {});
// -- Javascript Control Library (behaviors) --

        var jcl = {

// Detect InternetExplorer for some specific implementation differences.
        isIE: (window.navigator.userAgent.indexOf("MSIE") > 0),
/// A list with all objects that are attached to any behaviour
                List: [],
// attach events, methods and default-values to a html object (using the english spelling)

                LoadBehaviour: function (obj, behaviour) {
                if ((obj) && (obj.constructor == String))
                        obj = document.getElementById(obj);
                        if (obj == null) {
                alert("LoadBehaviour: obj argument is missing.");
                } else if (behaviour == null) {
                alert("LoadBehaviour: behaviour argument is missing.");
                } else {
                if (behaviour.inheritFrom) {
                this.LoadBehaviour(obj, behaviour.inheritFrom);
                        this.List.pop();
                }

                if ((! this.isIE) && (obj.attributes)) {
                // copy all attributes to this.properties
                for (var n = 0; n < obj.attributes.length; n++)
                        if (obj[obj.attributes[n].name] == null)
                        obj[obj.attributes[n].name] = obj.attributes[n].value;
                } // if

                for (var p in behaviour) {
                if (p.substr(0, 2) == "on") {
                this.AttachEvent(obj, p, behaviour[p].bind(obj));
                } else if ((behaviour[p] == null) || (behaviour[p].constructor != Function)) {
                // set default-value
                if (obj[p] == null)
                        obj[p] = behaviour[p];
                } else {
                // attach method
                obj[p] = behaviour[p];
                } // if
                } // for

                obj._attachedBehaviour = behaviour;
                } // if
                if (obj)
                        this.List.push(obj);
                }, // LoadBehaviour


/// Find the parent node of a given object that has the behavior attached.
                FindBehaviourElement: function (obj, behaviourDef) {
                while ((obj) && (obj._attachedBehaviour != behaviourDef))
                        obj = obj.parentNode;
                        return(obj);
                },
/// Find the child elements with a given className contained by obj.
                getElementsByClassName: function (obj, cName) {
                var ret = new Array();
                        var allNodes = obj.getElementsByTagName("*");
                        for (var n = 0; n < allNodes.length; n++) {
                if (allNodes[n].className == cName)
                        ret.push(allNodes[n]);
                }
                return(ret);
                },
/// Find the child elements with a given name contained by obj.
                getElementsByName: function (obj, cName) {
                var ret = new Array();
                        var allNodes = obj.getElementsByTagName("*");
                        for (var n = 0; n < allNodes.length; n++) {
                if (allNodes[n].name == cName)
                        ret.push(allNodes[n]);
                }
                return(ret);
                },
        }, // DetachEvent


/// Create a duplicate of a given JavaScript Object.
/// References are not duplicated !
        CloneObject: function (srcObject) {
        var tarObject = new Object();
                for (var p in srcObject)
                tarObject[p] = srcObject[p];
                return(tarObject);
        }, // CloneObject

//        CONTINUA!!!!!! ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** *
        // calculate the absolute position of an html element
        absolutePosition: function(obj) {
        var pos = null;
                if (obj) {
        pos = new Object();
                pos.top = obj.offsetTop;
                pos.left = obj.offsetLeft;
                pos.width = obj.offsetWidth;
                pos.height = obj.offsetHeight;
                obj = obj.offsetParent;
                while (obj) {
        pos.top += obj.offsetTop;
                pos.left += obj.offsetLeft;
                obj = obj.offsetParent;
        } // while
        }
        return(pos);
        }, // _absolutePosition

        BuildFullEventname: function (obj) {
        var en = null;
                // find the local event name on the object itself.
                if (! obj) {
        return(null);
        } else if ((obj.eventname) && (obj.eventname.length > 0)) {
        en = obj.eventname;
        } else if ((obj.attributes["eventname"]) && (obj.attributes["eventname"].value.length > 0)) {
        en = obj.attributes["eventname"].value;
        } // if

        // search the event namespace if not present in the local eventname.
        if ((en) && (en.indexOf('.') < 0)) {
        while ((obj) && (! obj.eventnamespace) && ((obj.attributes) && (! obj.attributes["eventnamespace"])))
                obj = obj.parentNode;
                if (obj == document) {
        en = "jcl." + en; // default namespace, if none is specified.
        } else if ((obj) && (obj.eventnamespace)) {
        en = obj.eventnamespace + "." + en;
        } else if ((obj) && (obj.attributes["eventnamespace"])) {
        en = obj.attributes["eventnamespace"].value + "." + en;
        } // if
        } // if
        return(en);
        }, // BuildFullEventname


/// Return the local part of a full qualified eventname.
        LocalEventName: function (evn) {
        var idx;
                if (evn) {
        idx = evn.lastIndexOf('.');
                if (idx >= 0)
                evn = evn.substr(idx + 1);
        } // if
        return(evn);
        },
// find a relative link to the controls folder containing jcl.js
        GetControlsPath: function () {
        var path = "../controls/";
                var s;
                for (var n in document.scripts) {
        s = String(document.scripts[n].src);
                if ((s) && (s.length >= 6) && (s.substr(s.length - 6).toLowerCase() == "jcl.js"))
                path = s.substr(0, s.length - 6);
        } // for
        return(path);
        }, // GetControlsPath


// init all objects when the page is loaded
        onload: function(evt) {
        var obj, c;
                evt = evt || window.event;
                // initialize all 
                for (c in jcl.List) {
        obj = jcl.List[c];
                if ((obj) && (obj.init))
                obj.init();
        } // for

        for (c in jcl.List) {
        obj = jcl.List[c];
                if ((obj) && (obj.afterinit))
                obj.afterinit();
        } // for
        }, // onload


// init all objects when the page is loaded
        onunload: function(evt) {
        evt = evt || window.event;
                for (var n in jcl.List) {
        var obj = jcl.List[n];
                if ((obj) && (obj.term))
                obj.term();
        } // for
        }, // onunload


// allow non-submitting input elements
        onkeypress: function(evt) {
        evt = evt || window.event;
                if (evt.keyCode == 13) {
        var obj = document.activeElement;
                while ((obj) && (obj.nosubmit == null))
                obj = obj.parentNode;
                if ((obj) && ((obj.nosubmit == true) || (obj.nosubmit.toLowerCase() == "true"))) {
        // cancle ENTER / RETURN
        evt.cancelBubble = true;
                evt.returnValue = false;
        } // if
        } // if              
        }, // onkeypress


// --- cookie helper methods ---

        getCookie: function(aName) {
        var start = document.cookie.indexOf(" " + aName + "=");
                if (start >= 0) {
        start += 1;
        } else if (document.cookie.indexOf(aName + "=") == 0) {
        start = 0;
        } // if
        if ((!start) && (aName != document.cookie.substring(0, aName.length)))
                return null;
                var len = start + aName.length + 1;
                if (start == - 1) return null;
                var end = document.cookie.indexOf(';', len);
                if (end == - 1) end = document.cookie.length;
                return unescape(document.cookie.substring(len, end));
        }, // _getCookie


        setCookie: function (aName, value, path, expire) {
        if ((path == null) || (path == "")) {
        // use the current folder from the url for the cookie to avoid conflicts
        path = String(window.location.href).split('/');
                path = '/' + path.slice(3, path.length - 1).join('/');
        } // if

        if (expire) {
        var today = new Date();
                expire = parseInt(expire, 10) * 1000 * 60 * 60 * 24;
                expire = new Date(today.getTime() + expire);
        } else {
        expire = null;
        }// if

        window.document.cookie = aName + "=" + escape(value)
                + ((path) ? ';path=' + path : "")
                + ((expire) ? ";expires=" + expire.toGMTString() : "");
        }, // setCookie


        init: function () {
        this.AttachEvent(window, "onload", this.onload);
                this.AttachEvent(window, "onunload", this.onunload);
                this.AttachEvent(document, "onkeypress", this.onkeypress);
        } // init

} // jcl

// document.jcl_isinit (is not declared!) will be set to true to detect multiple jcl includes.
if (document.jcl_isinit)
        alert("multiple jcl includes detected !");
        document.jcl_isinit = true;
        jcl.init();
// ----- make FF more IE compatible -----
        if (! jcl.isIE) {

// ----- HTML objects -----

HTMLElement.prototype.__defineGetter__("innerText", function () { return(this.textContent); });
        HTMLElement.prototype.__defineSetter__("innerText", function (txt) { this.textContent = txt; });
        HTMLElement.prototype.__defineGetter__("XMLDocument", function () {
        return ((new DOMParser()).parseFromString(this.innerHTML, "text/xml"));
        });
        // ----- Event objects -----

        // enable using evt.srcElement in Mozilla/Firefox
        Event.prototype.__defineGetter__("srcElement", function () {
        var node = this.target;
                while (node.nodeType != 1) node = node.parentNode;
                // test this:
                if (node != this.target) alert("Unexpected event.target!")
                return node;
        });
        // enable using evt.cancelBubble=true in Mozilla/Firefox
        Event.prototype.__defineSetter__("cancelBubble", function (b) {
        if (b) this.stopPropagation();
        });
        // enable using evt.returnValue=false in Mozilla/Firefox
        Event.prototype.__defineSetter__("returnValue", function (b) {
        if (!b) this.preventDefault();
        });
        // ----- XML objects -----

        // select the first node that matches the XPath expression
        // xPath: the XPath expression to use
        XMLDocument.prototype.selectSingleNode = function(xPath) {
        var doc = this;
                if (doc.nodeType != 9)
                doc = doc.ownerDocument;
                if (doc.nsResolver == null) doc.nsResolver = function(prefix) { return(null); };
                var node = doc.evaluate(xPath, this, doc.nsResolver, XPathResult.ANY_UNORDERED_NODE_TYPE, null);
                if (node) node = node.singleNodeValue;
                return(node);
        }; // selectSingleNode


        // select the first node that matches the XPath expression
        // xPath: the XPath expression to use
        Node.prototype.selectSingleNode = function(xPath) {
        var doc = this;
                if (doc.nodeType != 9)
                doc = doc.ownerDocument;
                if (doc.nsResolver == null) doc.nsResolver = function(prefix) { return(null); };
                var node = doc.evaluate(xPath, this, doc.nsResolver, XPathResult.ANY_UNORDERED_NODE_TYPE, null);
                if (node) node = node.singleNodeValue;
                return(node);
        }; // selectSingleNode


        Node.prototype.__defineGetter__("text", function () {
        return(this.textContent);
        }); // text

        }


// ----- Enable an easy attaching methods to events -----
// see http://digital-web.com/articles/scope_in_javascript/

Function.prototype.bind = function(obj) {
var method = this, temp = function() {
return method.apply(obj, arguments);
}
return(temp);
        } // Function.prototype.bind


// ----- classname modifications -----

function addClassName (elem, className) {
if (elem.nodeType != 3) {
removeClassName (elem, className);
        if (className)
        elem.className = (elem.className + " " + className);
} // if
} // addClassName

function removeClassName (elem, className) {
if (elem.nodeType != 3) {
var cn = " " + elem.className + " ";
        if (className)
        cn = cn.replace(" " + className + " ", "");
        cn = cn.replace(/^\s+|\s+$/g, "");
        elem.className = cn;
} // if
} // removeClassName

// ----- End -----