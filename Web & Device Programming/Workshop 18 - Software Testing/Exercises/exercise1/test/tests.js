QUnit.test( "hello test", function( assert ) {
  assert.ok( 1 == "1", "Passed!" );
});

/* Check number of tabs using a custom fucntion */
QUnit.test( "number of tabs", function( assert ) {
  assert.equal(tabsCount(), "3" );
});

/* Check number of tabs from the variable totalTabCount */
QUnit.test( "number of tabs 2", function( assert ) {
  assert.equal(totalTabCount, "3" );
});

/* Check number of tabs from the variable totalTabCount */
QUnit.test( "number of tabs 2, custom text", function( assert ) {
  assert.ok(totalTabCount == "3", "Passed, num. of tabs is " + totalTabCount);
});

/* Check number of tabs from the variable totalTabCount */
QUnit.test( "trigger()", function( assert ) {
  assert.ok(myValue == "4", "Passed, myValue is: " + myValue);
});
