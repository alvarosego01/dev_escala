export default e=>`${e.charAt(0).toLowerCase()}${e.replace(/[\W_]/g,"|").split("|").map(e=>`${e.charAt(0).toUpperCase()}${e.slice(1)}`).join("").slice(1)}`;