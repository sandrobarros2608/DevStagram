import Dropzone from "dropzone";

// Para que no busque automaticamente los elementos que contengan Dropzone
Dropzone.autoDiscover = false;

// Agregamos el id
const dropzone = new Dropzone('#dropzone', {
    /* Traducir el mensaje */
    dictDefaultMessage: 'Sube aquí tu imagen',
    /* Permita diferentes tipos de archivos de imagen */
    acceptedFiles: '.png, .jpg, .jpeg, .gif',
    /* Permite eliminar la imagen */
    addRemoveLinks: true,
    /* Traducir el mensaje para borrar la imagen */
    dictRemoveFile: 'Borrar Archivo',
    /* Permitir subir solo una imagen */
    maxFiles: 1,
    /* No permite subir varios archivos */
    uploadMultiple: false,
});