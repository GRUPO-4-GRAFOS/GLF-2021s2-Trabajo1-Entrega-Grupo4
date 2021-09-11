let contendor = document.querySelector('#container');
const formNodo = document.querySelector('#form-nodo');
const formArista = document.querySelector('#form-arista');

let nodos = [];
let aristas = [];

//*Accion para agregar un nodo al arreglo
formNodo.addEventListener('click', event => {
  event.preventDefault();
  const inputNodo = document.querySelector('#inputNodo');

  const nodo = {
    id: nodos.length + 1,
    label: inputNodo.value,
  };

  const nomNodo = nodos.filter(
    nodo => nodo.label === inputNodo.value
  );

  if (nomNodo.length !== 0) {
    alert('Ese nodo ya exsite');
    return;
  }

  nodos.push(nodo);

  lanzarNetwork();

  inputNodo.value = '';
});

//*Accion para agregar una arista a 2 nodos
formArista.addEventListener('click', event => {
  event.preventDefault();

  const nodoInicio = document.querySelector('#nodoInicio');
  const nodoFin = document.querySelector('#nodoFin');

  const nodo1 = nodos.filter(nodo => nodo.label === nodoInicio.value);
  const nodo2 = nodos.filter(nodo => nodo.label === nodoFin.value);

  if (nodo1.length === 0) {
    alert('Nodo de incio esta vacio o no existe en el grafo');
    return;
  }

  if (nodo2.length === 0) {
    alert('Nodo final esta vacio o no existe en el grafo');
    return;
  }

  const arista = {
    from: nodo1[0].id,
    to: nodo2[0].id,
  };

  aristas.push(arista);

  lanzarNetwork();

  nodoInicio.value = '';
  nodoFin.value = '';
});

//*Funcion para redibujar el grafo
const lanzarNetwork = () => {
  const nodes = new vis.DataSet(nodos);

  const edges = new vis.DataSet(aristas);

  const datos = {
    nodes: nodes,
    edges: edges,
  };

  const opciones = {};

  const network = new vis.Network(contendor, datos, opciones);
};
