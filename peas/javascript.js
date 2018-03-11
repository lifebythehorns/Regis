// Example 26-14: javascript.js

canvas               = O('logo')
context              = canvas.getContext('2d')
context.font         = 'bold italic 64px Georgia'
context.textBaseline = 'top'
gradient = context.createLinearGradient(0, 0, 0, 89)
gradient.addColorStop(0.00, '#faa')
gradient.addColorStop(0.66, '#f00')
context.fillStyle = gradient
context.fillText(  "Peas in a Pod", 75, 25)
context.strokeText("Peas in a Pod",75, 25)


function O(i) { return typeof i == 'object' ? i : document.getElementById(i) }
function S(i) { return O(i).style                                            }
function C(i) { return document.getElementsByClassName(i)                    }