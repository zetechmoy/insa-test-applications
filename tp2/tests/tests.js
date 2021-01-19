

var chai    = require("chai");
var pair 		= require("../js/pair");

describe("Verify pair function", function() {
	it("Should return true if is pair or false instead", function(){
		chai.expect(pair(0)).to.equal(true);
		chai.expect(pair(1)).to.equal(false);
		chai.expect(pair(2)).to.equal(true);
		chai.expect(pair(3)).to.equal(false);
		chai.expect(pair(4)).to.equal(true);
		chai.expect(pair(5)).to.equal(false);
	});

});
