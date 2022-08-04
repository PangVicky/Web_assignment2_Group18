
const data = [
    {
      "img": "DesperateHousewives.jpg",
      "name": "Desperate Housewives",
      "year": 2015,
      "director": "Dan Jukes",
      "desc": [
        "Radiation resistance",
        "Turning tiny",
        "Radiation blast"
      ],
      "link": "https://www.youtube.com/watch?v=bd7UQA9laJE"
    },
    {
      "img": "Friends.jpg",
      "name": "Friends",
      "year": 2007,
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ]
    },
    {
      "img": "Grey's_Anatomy.jpg",
      "name": "Grey's Anatomy",
      "year": 2010,
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ]
    },
    {
      "img": "HouseCards.jpg",
      "name": "House of Cards",
      "year": 2019,
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ]
    },
    {
      "img": "young_sheldon.jpg",
      "name": "Young Sheldon",
      "year": 2020,
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ]
    }
  ]

//console.log(data[0]);
 
 function searchfunc() {
  //get the user's input for search
   var input = document.getElementById('searchbar').value;
   input = input.toLowerCase();
  //match the json data contain the  searched keyword
   for (i = 0; i < data.length; i++) {
     var obj = data[i];
     //console.log(obj);
    //if exist, create the table data:column and row
     if (obj.name.toLowerCase().includes(input)) {
      var tbody = document.querySelector("tbody");
       var tr= document.createElement('tr');
      //the 1st column show the picture of the video
       var tdpic = document.createElement('img');
       tdpic.setAttribute("id", obj.name);
       tdpic.setAttribute("src", "images/"+obj.img);
       tdpic.setAttribute("onclick", "clickImage");
       tdpic.onclick = function() {
        window.location = obj.link;
       }
       tr.appendChild(tdpic);
       //the 2nd column show the name of the movies
       var tdname = document.createElement('td');
       tdname.innerHTML = `${obj.name}`;
       tr.appendChild(tdname);
      //show the year of the movies
      var tdyear = document.createElement('td');
      tdyear.innerHTML = `${obj.year}`;
      tr.appendChild(tdyear);
       //the 3rd column show the Genre
       var tdDesc = document.createElement('td');
       tdDesc.innerHTML = `${obj.desc}`;
       tr.appendChild(tdDesc);

       //finish one row and add it to tbody
       tbody.appendChild(tr);
   }
 }
}

function onloadEvent() {
   var _td = document.getElementById()

}