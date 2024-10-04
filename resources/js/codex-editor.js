import EditorJS from "@editorjs/editorjs";
import Header from "@editorjs/header";
import List from "@editorjs/list";
import Checklist from "@editorjs/checklist";
import ImageTool from "@editorjs/image";

const apiBaseUrl = "http://127.0.0.1:9000/api"; // Ganti dengan URL API Anda

const editor = new EditorJS({
  holder: "editorjs",
  tools: {
    header: {
      class: Header,
      inlineToolbar: ["link"],
    },
    list: {
      class: List,
      inlineToolbar: true,
    },
    checklist: {
      class: Checklist,
      inlineToolbar: true,
    },
    image: {
      class: ImageTool,
      config: {
        endpoints: {
          byFile: `${apiBaseUrl}/upload-image`, // Endpoint untuk unggahan file
          byUrl: `${apiBaseUrl}/upload-image`, // Endpoint untuk unggahan dari URL
        },
      },
    },
  },
});

window.editor = editor;
