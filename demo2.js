var events = [
  {'Date': new Date(2018, 11, 17), 'Title': 'Breakfast with IEU_Graduations'},
  {'Date': new Date(2018, 12, 18), 'Title': 'Meeting with Graduations','Link': 'https://twitter.com/ieumezunder/status/860856103718060032'},
  {'Date': new Date(2018, 12, 27), 'Title': 'Seminar','Link': 'https://twitter.com/ieumezunder/status/861191737540317184'},
];
var settings = {};
var element = document.getElementById('caleandar');
caleandar(element, events, settings);
