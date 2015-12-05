/**
 * Frontend logger v1.0.0
 * @author bence.demeter
 */
var logger={a:{b:"TRACE",c:"DEBUG",d:"INFO",e:"NOTICE",f:"WARN",g:"ERROR"},h:function(i,j){if(logging&&console&&console.log){console.log('['+new Date().toUTCString()+']: '+j+' - '+i);}},trace:function(i){this.h(i,this.a.b);},debug:function(i){this.h(i,this.a.c);},info:function(i){this.h(i,this.a.d);},notice:function(i){this.h(i,this.a.e);},warn:function(i){this.h(i,this.a.f);},error:function(i){this.h(i,this.a.g);}};