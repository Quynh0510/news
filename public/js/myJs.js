/**
 * Created by luong on 10/11/2017.
 */
function openAlbum() {
    document.getElementById("myAlbum").style.display = "block";
    document.getElementById("myAlbum").style.width = "300px";


}

function closeAlbum() {
    document.getElementById("myAlbum").style.display = "none";
}


function myFunction() {
    return confirm("Are you sure ?");
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});


function seeAlllyric() {
    $("#lyric-song").hide();
    $("#lyric-song-full").show();
}
function back_lyricsong() {
    $("#lyric-song").show();
    $("#lyric-song-full").hide();
}

$("#unlike").hide();

function like() {
    $("#like").hide();
    $("#unlike").show();
}

function unlike() {
    $("#like").show();
    $("#unlike").hide();
}

$("#AllComment").hide();
function AllComment() {
    $("#itemComment").hide();
    $("#AllComment").show();
}

function itemComment() {
    $("#itemComment").show();
    $("#AllComment").hide();
}