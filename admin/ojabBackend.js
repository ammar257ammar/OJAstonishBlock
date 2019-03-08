/**
 * @package    OceanicJ.OJAstonishBlock
 * @subpackage mod_ojastonishblock
 * @copyright  Copyright (C) 2014 - 2019 OceanicJ (http://www.oceanicj.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */
(function( $ ) {
$(function() {

    var astreck = $("#jform_params_ojabArticleID-lbl").text();
    $("#jform_params_ojabArticleID-lbl").text(astreck+" *");
    
    var glyphClass = $("#jform_params_ojabGlyphiconClass").parent().html();
    $("#jform_params_ojabGlyphiconClass").parent().html(glyphClass+"<a rel=\"{handler: 'iframe', size: {x: 800, y: 500}}\" href=\"../modules/mod_ojastonishblock/admin/seeall/glyphicon.htm\" title=\"See all Glyphicons here::click this link to open a modal window with all available options\" class=\"modal hasTip customlink dropdown\">See all -></a>");

    $("#jform_params_ojabLinkType0").on("LinkTypeArticle",function() {

    	$("#jform_params_ojabLinkType label[for=\"jform_params_ojabLinkType2\"]").attr("style","background-color: #E6E6E6 !important");
        $("#jform_params_ojabCustomLink").parent().parent().slideUp();
        $("#jform_params_ojabK2ID-lbl").parent().parent().slideUp();
        $("#jform_params_ojabArticleID_name").parent().parent().parent().slideDown("slow");
        $("#jform_params_ojabArticleID_id").addClass("required modal-value");

    });

    $("#jform_params_ojabLinkType1").on("LinkTypeCustom",function() {

    	$("#jform_params_ojabLinkType label[for=\"jform_params_ojabLinkType2\"]").attr("style","background-color: #E6E6E6 !important");
        $("#jform_params_ojabArticleID_name").parent().parent().parent().slideUp();
        $("#jform_params_ojabK2ID-lbl").parent().parent().slideUp();
        $("#jform_params_ojabCustomLink").parent().parent().slideDown("slow");
        $("#jform_params_ojabArticleID_id").removeClass("required modal-value");
      
    });
    
    $("#jform_params_ojabLinkType2").on("LinkTypeK2",function() {

    	$("#jform_params_ojabLinkType label[for=\"jform_params_ojabLinkType2\"].active").attr("style","background-color: #335DC2 !important");
        $("#jform_params_ojabCustomLink").parent().parent().slideUp();
        $("#jform_params_ojabArticleID_name").parent().parent().parent().slideUp();
    	$("#jform_params_ojabK2ID-lbl").parent().parent().slideDown("slow");
        $("#jform_params_ojabArticleID_id").removeClass("required modal-value");

    });

    $("#jform_params_ojabTitle").on("TitleType",function() {

        if($('#jform_params_ojabTitle :selected').val() == 'none' ){

        	$("#jform_params_ojabCustomTitle").parent().parent().slideUp();

		}else if($('#jform_params_ojabTitle :selected').val() == 'article_title' ){

			$("#jform_params_ojabCustomTitle").parent().parent().slideUp();

		}else if($('#jform_params_ojabTitle :selected').val() == 'custom_title' ){

			$("#jform_params_ojabCustomTitle").parent().parent().slideDown("slow");

		}

    });

    $("#jform_params_ojabBodyText").on("BodyText",function() {

        if($('#jform_params_ojabBodyText :selected').val() == 'none' ){

        	$("#jform_params_ojabCustomBodyText").parent().parent().slideUp();
			$("#jform_params_ojabArticleTextLimit").parent().parent().slideUp();

		}else if($('#jform_params_ojabBodyText :selected').val() == 'article_text' ){

			$("#jform_params_ojabCustomBodyText").parent().parent().slideUp();
			$("#jform_params_ojabArticleTextLimit").parent().parent().slideDown("slow");

		}else if($('#jform_params_ojabBodyText :selected').val() == 'custom_text' ){

			$("#jform_params_ojabCustomBodyText").parent().parent().slideDown("slow");
			$("#jform_params_ojabArticleTextLimit").parent().parent().slideUp();

		}

    });

    $("#jform_params_ojabShowButton0").on("ShowButtonNo",function() {

        $("#jform_params_ojabButtonText").parent().parent().slideUp();

    });

    $("#jform_params_ojabShowButton1").on("ShowButtonYes",function() {

        $("#jform_params_ojabButtonText").parent().parent().slideDown("slow");

    });

    $("#jform_params_ojabImage").on("ImageType",function() {



        if($('#jform_params_ojabImage :selected').val() == 'none' ){

        	$("#jform_params_ojabGlyphiconSet").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconClass").parent().parent().slideUp();
            $("#jform_params_ojabGlyphiconColor").parent().parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconSize").parent().parent().slideUp();
        	$("#jform_params_ojabCustomImage").parent().parent().parent().slideUp();

		}else if($('#jform_params_ojabImage :selected').val() == 'article_intro_image' ){

			$("#jform_params_ojabGlyphiconSet").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconClass").parent().parent().slideUp();
            $("#jform_params_ojabGlyphiconColor").parent().parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconSize").parent().parent().slideUp();
        	$("#jform_params_ojabCustomImage").parent().parent().parent().slideUp();

		}else if($('#jform_params_ojabImage :selected').val() == 'glyphicon' ){

			$("#jform_params_ojabGlyphiconSet").parent().parent().slideDown("slow");
        	$("#jform_params_ojabGlyphiconClass").parent().parent().slideDown("slow");
            $("#jform_params_ojabGlyphiconColor").parent().parent().parent().slideDown("slow");
        	$("#jform_params_ojabGlyphiconSize").parent().parent().slideDown("slow");
        	$("#jform_params_ojabCustomImage").parent().parent().parent().slideUp();

		}else if($('#jform_params_ojabImage :selected').val() == 'custom_image' ){

			$("#jform_params_ojabCustomImage").parent().parent().parent().slideDown("slow");
			$("#jform_params_ojabGlyphiconSet").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconClass").parent().parent().slideUp();
            $("#jform_params_ojabGlyphiconColor").parent().parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconSize").parent().parent().slideUp();

		}

    });

    $("#jform_params_ojabImage").on("ImageTypeInit",function() {

        if($('#jform_params_ojabImage :selected').val() == 'none' ){

        	$("#jform_params_ojabGlyphiconSet").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconClass").parent().parent().slideUp();
            $("#jform_params_ojabGlyphiconColor").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconSize").parent().parent().slideUp();
        	$("#jform_params_ojabCustomImage").parent().parent().parent().slideUp();

		}else if($('#jform_params_ojabImage :selected').val() == 'article_intro_image' ){

			$("#jform_params_ojabGlyphiconSet").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconClass").parent().parent().slideUp();
            $("#jform_params_ojabGlyphiconColor").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconSize").parent().parent().slideUp();
        	$("#jform_params_ojabCustomImage").parent().parent().parent().slideUp();

		}else if($('#jform_params_ojabImage :selected').val() == 'glyphicon' ){

			$("#jform_params_ojabGlyphiconSet").parent().parent().slideDown("slow");
        	$("#jform_params_ojabGlyphiconClass").parent().parent().slideDown("slow");
            $("#jform_params_ojabGlyphiconColor").parent().parent().slideDown("slow");
        	$("#jform_params_ojabGlyphiconSize").parent().parent().slideDown("slow");
        	$("#jform_params_ojabCustomImage").parent().parent().parent().slideUp();

		}else if($('#jform_params_ojabImage :selected').val() == 'custom_image' ){

			$("#jform_params_ojabCustomImage").parent().parent().parent().slideDown("slow");
			$("#jform_params_ojabGlyphiconSet").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconClass").parent().parent().slideUp();
            $("#jform_params_ojabGlyphiconColor").parent().parent().slideUp();
        	$("#jform_params_ojabGlyphiconSize").parent().parent().slideUp();

		}

    });

    $("#jform_params_ojabBackgroundType").on("BackgroundTypeInit",function() {

        if($('#jform_params_ojabBackgroundType :selected').val() == 'transperant' ){

        	$("#jform_params_ojabBackgroundColor").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient1").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();
        	
		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'color' ){

			$("#jform_params_ojabBackgroundColor").parent().parent().slideDown("slow");
			$("#jform_params_ojabBackgroundGradient1").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();

		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'gradient' ){

			$("#jform_params_ojabBackgroundGradient1").parent().parent().slideDown("slow");
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().slideDown("slow");
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundColor").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();
        	
		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'texture' ){

			$("#jform_params_ojabBackgroundTexture").parent().parent().slideDown("slow");
			$("#jform_params_ojabBackgroundColor").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient1").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();

		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'hexagon' ){

			$("#jform_params_ojabBackgroundHexagon").parent().parent().slideDown("slow");
			$("#jform_params_ojabBackgroundColor").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient1").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();

		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'heart' ){

			$("#jform_params_ojabBackgroundHeart").parent().parent().slideDown("slow");
			$("#jform_params_ojabBackgroundColor").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient1").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();

		}

    });

     $("#jform_params_ojabBackgroundType").on("BackgroundType",function() {

        if($('#jform_params_ojabBackgroundType :selected').val() == 'transperant' ){

        	$("#jform_params_ojabBackgroundColor").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient1").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();

		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'color' ){

			$("#jform_params_ojabBackgroundColor").parent().parent().parent().slideDown("slow");
			$("#jform_params_ojabBackgroundGradient1").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();

		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'gradient' ){

			$("#jform_params_ojabBackgroundGradient1").parent().parent().parent().slideDown("slow");
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().parent().slideDown("slow");
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundColor").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();

		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'texture' ){

			$("#jform_params_ojabBackgroundTexture").parent().parent().slideDown("slow");
			$("#jform_params_ojabBackgroundColor").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient1").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();

		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'hexagon' ){

			$("#jform_params_ojabBackgroundHexagon").parent().parent().slideDown("slow");
			$("#jform_params_ojabBackgroundColor").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient1").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHeart").parent().parent().slideUp();

		}else if($('#jform_params_ojabBackgroundType :selected').val() == 'heart' ){

			$("#jform_params_ojabBackgroundHeart").parent().parent().slideDown("slow");
			$("#jform_params_ojabBackgroundColor").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient1").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundGradient2").parent().parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundHexagon").parent().parent().slideUp();
        	$("#jform_params_ojabBackgroundTexture").parent().parent().slideUp();

		}

    });

    $("#jform_params_ojabLinkType0").click(function()   	{	$("#jform_params_ojabLinkType0").prop("checked", true).trigger("LinkTypeArticle");		});

    $("#jform_params_ojabLinkType1").click(function()   	{	$("#jform_params_ojabLinkType1").prop("checked", true).trigger("LinkTypeCustom");		});
    
    $("#jform_params_ojabLinkType2").click(function()   	{	$("#jform_params_ojabLinkType2").prop("checked", true).trigger("LinkTypeK2");			});

    $("#jform_params_ojabTitle").change(function() 	    	{   $("#jform_params_ojabTitle").prop("selected", true).trigger("TitleType");				});

    $("#jform_params_ojabBodyText").change(function()		{   $("#jform_params_ojabBodyText").prop("selected", true).trigger("BodyText");				});

    $("#jform_params_ojabShowButton0").click(function() 	{	$("#jform_params_ojabShowButton0").prop("checked", true).trigger("ShowButtonNo");		});

    $("#jform_params_ojabShowButton1").click(function() 	{	$("#jform_params_ojabShowButton1").prop("checked", true).trigger("ShowButtonYes");		});

    $("#jform_params_ojabImage").change(function() 			{	$("#jform_params_ojabImage").prop("selected", true).trigger("ImageType");				});

    $("#jform_params_ojabBackgroundType").change(function() {	$("#jform_params_ojabBackgroundType").prop("selected", true).trigger("BackgroundType");	});

    if( $("#jform_params_ojabLinkType1").prop("checked")){
        $("#jform_params_ojabLinkType1").trigger("LinkTypeCustom");
    }else if($("#jform_params_ojabLinkType2").prop("checked")){
    	$("#jform_params_ojabLinkType2").trigger("LinkTypeK2");
    }else{
    	$("#jform_params_ojabLinkType0").trigger("LinkTypeArticle");
   	}

    if($("#jform_params_ojabShowButton1").prop("checked")){
        $("#jform_params_ojabShowButton1").trigger("ShowButtonYes");
    } else{ $("#jform_params_ojabShowButton0").trigger("ShowButtonNo"); }

    $("#jform_params_ojabTitle").trigger("TitleType");
    $("#jform_params_ojabBodyText").trigger("BodyText");
    $("#jform_params_ojabImage").trigger("ImageTypeInit");
    $("#jform_params_ojabBackgroundType").trigger("BackgroundTypeInit");

});
})(jQuery);


