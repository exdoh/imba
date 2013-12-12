var tid = null;
function countdown(sec) {

 document.getElementById( 'tel' ).firstChild.nodeValue= 'in ' + sec + ' second' +
  ( sec===1 ? '' : 's' );
 if( sec ) {
  tid = window.setTimeout( 'countdown(' + ( --sec ) + ');', 1000 );
 } else {
 // stop();
  location.replace("index.html"); 
 }
}
function stop() {
 window.clearTimeout( tid );
}