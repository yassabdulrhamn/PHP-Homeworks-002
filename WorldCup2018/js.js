

//Database Array::
var teamsName = ["France", "Croatia", "Belgium"];
var players = [
  ["paul pogba", "Raphael Varane", "Antoine Griezmann","images/France/paul-pogba.jpg", "images/France/Raphael Varane.jpg", "images/France/Antoine Griezmann.jpg"],
  ["Luka Modriat ", "Mario ", "Ivan Rakitiat","images/Croatia/Ivan Rakitic.jpg", "images/Croatia/Luka Modric.jpg", "images/Croatia/Mario Mandzukic.jpg"],
  ["Thibaut Courtois", "Kevin De Bruyne","Romelu Lukaku","images/Belgium/Kevin De Bruyne.jpg", "images/Belgium/Romelu Lukaku.jpg", "images/Belgium/Thibaut Courtois.jpg"]
];

var achievements = ["The France national football team (French) represents France in international football and is controlled by the French Football Federation, also known as FFF, or in French. The team's colours are blue, white and red, and the coq gaulois its symbol. France are colloquially known as Les Bleus (The Blues). The French side are the reigning World Cup holders, having won the 2018 FIFA World Cup on 15 July 2018.", " Greece would suffer a second successive failure to reach a major tournament. They finished second in Group H of the European qualifying stages, nine points behind runaway leaders Belgium and only two points c in history books. One simply cannot expect the FIFA World Cup to be bereft of spectacular goals, mouthwatering contests, nail-biting finishes, drama, heartbreaks and glory. My personal belief is that the giants of this forthcoming event include 5-time champions Brazil, 4-time winners Germany, Argentina, Spain and France.",
"With the football fraternity fastening its seat belt to experience the biggest sporting event in the world of football, it is of no doubt that the FIFA World Cup 2018 is what every football fan is eagerly waiting for. The best in the world will battle it out against each other to carve their names and immortalize themselves in history books. One simply cannot expect the FIFA World Cup to be bereft of spectacular goals, mouthwatering contests, nail-biting finishes, drama, heartbreaks and glory. My personal belief is that the giants of this forthcoming event include 5-time champions Brazil, 4-time winners Germany, Argentina, Spain and France."];

var background = ["images/BG_France.png","images/BG_Croatia.png","images/BG_Belgium.png"]

function ShowTeamName(x) {
document.getElementById("teamname").innerHTML=teamsName[x];

document.getElementById("playerN01").innerHTML=players[x][0];
document.getElementById("playerN02").innerHTML=players[x][1];
document.getElementById("playerN03").innerHTML=players[x][2];
document.getElementById("playerN01img").src=players[x][3];
document.getElementById("playerN02img").src=players[x][4];
document.getElementById("playerN03img").src=players[x][5];

document.getElementById("special_achievements").innerHTML=achievements[x];

document.getElementById("content").style.backgroundImage = "url('"+background[x]+"')";
if(x==0)
{
  window.alert("France national football team, the winner of world cup 2018");
}
}
function onHoverShowTeamName(x)
{
    document.getElementById("teamname").innerHTML=teamsName[x];
}
