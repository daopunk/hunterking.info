var nodesjs = new NodesJs({
  id: 'nodes',
  width: window.innerWidth,
  height: window.innerHeight,
  particleSize: 6,
  lineSize: 2,
  particleColor: [255, 255, 255, 0.2],
  lineColor: [255, 150, 200],
  backgroundFrom: [0, 40, 70],
  backgroundTo: [31, 41, 51],
  backgroundDuration: 5000,
  nobg: false,
  number: window.hasOwnProperty('orientation') ? 30: 100,
  speed: 20,
  pointerCircleRadius: 150
});