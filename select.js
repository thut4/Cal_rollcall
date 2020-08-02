function configureDropDownLists(year, major) {
  var One = ["CST"];
  var Two = ["CS", "CT"];
  var Three= ["CS", "CT"];
  var Four= ["CS", "CT"];
  var Five= ["CS", "CT"];

  switch (year.value) {
    case "One":
      major.options.length = 0;
      for (i = 0; i < One.length; i++) {
        createOption(major, One[i], One[i]);
      }
      break;
    case "Two":
      major.options.length = 0;
      for (i = 0; i < Two.length; i++) {
        createOption(major, Two[i], Two[i]);
      }
      break;
    case "Three":
      major.options.length = 0;
      for (i = 0; i < Three.length; i++) {
        createOption(major, Three[i], Three[i]);
      }
      break;

      case "Four":
      major.options.length = 0;
      for (i = 0; i <Four.length; i++) {
        createOption(major, Four[i], Four[i]);
      }
      break;
      case "Five":
      major.options.length = 0;
      for (i = 0; i < Five.length; i++) {
        createOption(major, Five[i], Five[i]);
      }
      break;
    default:
      major.options.length = 0;
      break;
  }
}

function createOption(year, text, value) {
  var opt = document.createElement("option");
  opt.value = value;
  opt.text = text;
  year.options.add(opt);
}