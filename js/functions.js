// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());


// checks for Number
// http://stackoverflow.com/questions/1303646/check-variable-whether-is-number-or-string-in-javascript

function isNumber (o) {
	return ! isNaN (o-0);
}


// Allows to execute arbitrary script during a single chain
// http://paulirish.com/2008/jquery-doonce-plugin-for-chaining-addicts/
jQuery.fn.doOnce = function(func){ 
    this.length && func.apply(this); 
    return this; 
}