const  obtenerMunicipios = async  (departamentoId) => {
    let response = await fetch('/departamentos/' + departamentoId + '/municipios');
    return await response.json();
}
const llenarMunicipios = (municipios) => {
    let municipioSelect = document.getElementById('municipio');
    municipioSelect.innerHTML = ''; // Esta línea elimina todas las opciones existentes
    municipios.forEach(function(municipio) {
        let option = document.createElement('option');
        option.value = municipio.id;
        option.text = municipio.nombre;
        municipioSelect.appendChild(option);
    });
}

document.addEventListener('DOMContentLoaded', (event) => {
    let departamentoElement = document.getElementById('departamento');
    if(departamentoElement) {
        departamentoElement.addEventListener('change', async function() {
            let departamentoId = this.value;
            try {
                let municipios = await obtenerMunicipios(departamentoId);
                llenarMunicipios(municipios);
            } catch (error) {
                console.error('Error:', error);
            }
        });
    }
})
