let contendor = document.querySelector('#container');
let nodo = document.querySelector('#nodo');

const nodos = new vis.DataSet([
  { id: 1, label: '1' },
  { id: 2, label: '2' },
  { id: 3, label: '3' },
  { id: 4, label: '4' },
  { id: 5, label: '5' },
  { id: 6, label: '6' },
]);

const aristas = new vis.DataSet([
  { from: 1, to: 3 },
  { from: 1, to: 2 },
  { from: 3, to: 4 },
  { from: 5, to: 1 },
  { from: 6, to: 2 },
]);

const datos = {
  nodes: nodos,
  edges: aristas,
};

const opciones = {
  StyleSheetList,
};

let grafo = new vis.Network(contendor, datos, opciones);
