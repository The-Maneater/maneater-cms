$(function(){

	setInterval(function(){ 
		if($("div#topSideStory1").hasClass("container")){
			$("div#topSideStory1").removeClass("container").addClass("reverseContainer");

			$("div#topSideStory1 img").removeClass("image").addClass("reverseImage");

			$("div#topSideStory1 div").removeClass("overlay").addClass("reverseOverlay");

			$("div#topSideStory1 h1").removeClass("text topSideStoryHeading").addClass("reverseText reverseTopSideStoryHeading");

			$("div#topSideStory1 h5").removeClass("text topSideStoryCdeck").addClass("reverseText reverseTopSideStoryCdeck");
		}
		else{
			$("div#topSideStory1").removeClass("reverseContainer").addClass("container");

			$("div#topSideStory1 img").removeClass("reverseImage").addClass("image");

			$("div#topSideStory1 div").removeClass("reverseOverlay").addClass("overlay");

			$("div#topSideStory1 h1").removeClass("reverseText reverseTopSideStoryHeading").addClass("text topSideStoryHeading");

			$("div#topSideStory1 h5").removeClass("reverseText reverseTopSideStoryCdeck").addClass("text topSideStoryCdeck");
		
		}

	}, 8000);



	setTimeout(function(){ 
		setInterval(function(){ 
		if($("div#topSideStory2").hasClass("container")){
			$("div#topSideStory2").removeClass("container").addClass("reverseContainer");

			$("div#topSideStory2 img").removeClass("image").addClass("reverseImage");

			$("div#topSideStory2 div").removeClass("overlay").addClass("reverseOverlay");

			$("div#topSideStory2 h1").removeClass("text topSideStoryHeading").addClass("reverseText reverseTopSideStoryHeading");

			$("div#topSideStory2 h5").removeClass("text topSideStoryCdeck").addClass("reverseText reverseTopSideStoryCdeck");
		}
		else{
			$("div#topSideStory2").removeClass("reverseContainer").addClass("container");

			$("div#topSideStory2 img").removeClass("reverseImage").addClass("image");

			$("div#topSideStory2 div").removeClass("reverseOverlay").addClass("overlay");

			$("div#topSideStory2 h1").removeClass("reverseText reverseTopSideStoryHeading").addClass("text topSideStoryHeading");

			$("div#topSideStory2 h5").removeClass("reverseText reverseTopSideStoryCdeck").addClass("text topSideStoryCdeck");
		
		}

		}, 8000);
	}, 2000);

	setTimeout(function(){ 
		setInterval(function(){ 
		if($("div#topSideStory3").hasClass("container")){
			$("div#topSideStory3").removeClass("container").addClass("reverseContainer");

			$("div#topSideStory3 img").removeClass("image").addClass("reverseImage");

			$("div#topSideStory3 div").removeClass("overlay").addClass("reverseOverlay");

			$("div#topSideStory3 h1").removeClass("text topSideStoryHeading").addClass("reverseText reverseTopSideStoryHeading");

			$("div#topSideStory3 h5").removeClass("text topSideStoryCdeck").addClass("reverseText reverseTopSideStoryCdeck");
		}
		else{
			$("div#topSideStory3").removeClass("reverseContainer").addClass("container");

			$("div#topSideStory3 img").removeClass("reverseImage").addClass("image");

			$("div#topSideStory3 div").removeClass("reverseOverlay").addClass("overlay");

			$("div#topSideStory3 h1").removeClass("reverseText reverseTopSideStoryHeading").addClass("text topSideStoryHeading");

			$("div#topSideStory3 h5").removeClass("reverseText reverseTopSideStoryCdeck").addClass("text topSideStoryCdeck");
		
		}

		}, 8000);
	}, 4000);

	setTimeout(function(){ 
		setInterval(function(){ 
		if($("div#topSideStory4").hasClass("container")){
			$("div#topSideStory4").removeClass("container").addClass("reverseContainer");

			$("div#topSideStory4 img").removeClass("image").addClass("reverseImage");

			$("div#topSideStory4 div").removeClass("overlay").addClass("reverseOverlay");

			$("div#topSideStory4 h1").removeClass("text topSideStoryHeading").addClass("reverseText reverseTopSideStoryHeading");

			$("div#topSideStory4 h5").removeClass("text topSideStoryCdeck").addClass("reverseText reverseTopSideStoryCdeck");
		}
		else{
			$("div#topSideStory4").removeClass("reverseContainer").addClass("container");

			$("div#topSideStory4 img").removeClass("reverseImage").addClass("image");

			$("div#topSideStory4 div").removeClass("reverseOverlay").addClass("overlay");

			$("div#topSideStory4 h1").removeClass("reverseText reverseTopSideStoryHeading").addClass("text topSideStoryHeading");

			$("div#topSideStory4 h5").removeClass("reverseText reverseTopSideStoryCdeck").addClass("text topSideStoryCdeck");
		
		}

		}, 8000);
	}, 6000);

});