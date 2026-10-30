
console.log("Hola Mundo, desde JavaScript");


const fechaNacimiento = document.getElementById("fechaNacimiento");
const resultadoEdad = document.getElementById("resultadoEdad");

// Detectar cuando cambia la fecha.
fechaNacimiento.addEventListener("change", function() {

    // Limpiar los estilos anteriores.
    resultadoEdad.classList.remove(
        "edad-estado--mayor",
        "edad-estado--menor",
        "edad-estado--error"
    );

    // Comprobar si se seleccionó una fecha.
    if (fechaNacimiento.value === "") {
        resultadoEdad.textContent = "Selecciona una fecha para calcular tu edad.";
        return;
    }

    // Obtener la fecha de nacimiento.
    const [anio, mes, dia] = fechaNacimiento.value.split("-").map(Number);
    const nacimiento = new Date(anio, mes - 1, dia);

    // Obtener la fecha actual.
    const hoy = new Date();
    hoy.setHours(0, 0, 0, 0);

    // Validar que la fecha no sea futura.
    if (nacimiento > hoy) {
        resultadoEdad.textContent =
            "Error: no se puede calcular la edad con los datos elegidos. La fecha es futura.";
        resultadoEdad.classList.add("edad-estado--error");
        return;
    }

    // Calcular la edad.
    let edad = hoy.getFullYear() - nacimiento.getFullYear();

    const diferenciaMes = hoy.getMonth() - nacimiento.getMonth();

    if (
        diferenciaMes < 0 ||
        (diferenciaMes === 0 && hoy.getDate() < nacimiento.getDate())
    ) {
        edad--;
    }

    // Mostrar el resultado.
    if (edad >= 18) {
        resultadoEdad.textContent = "Eres mayor de edad. Tienes " + edad + " años.";
        resultadoEdad.classList.add("edad-estado--mayor");
    } else {
        resultadoEdad.textContent = "Eres menor de edad. Tienes " + edad + " años.";
        resultadoEdad.classList.add("edad-estado--menor");
    }

});