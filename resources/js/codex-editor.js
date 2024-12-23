import EditorJS from "@editorjs/editorjs";
import Header from "@editorjs/header";
import List from "@editorjs/list";
import Checklist from "@editorjs/checklist";
import ImageTool from "@editorjs/image";
import Embed from "@editorjs/embed";
import RawTool from "@editorjs/raw";
import Table from "@editorjs/table";

const apiBaseUrl = "https://e-course.mijurnal.com"; // Ganti dengan URL API Anda

const editor = new EditorJS({
  holder: "editorjs",
  tools: {
    header: {
      class: Header,
      inlineToolbar: ["link"],
    },
    embed: {
      class: Embed,
      config: {
        services: {
          youtube: true,
          coub: true,
        },
      },
    },
    list: {
      class: List,
      inlineToolbar: true,
    },
    raw: RawTool,
    checklist: {
      class: Checklist,
      inlineToolbar: true,
    },
    table: {
      class: Table,
      inlineToolbar: true,
      config: {
        rows: 2,
        cols: 3,
        maxRows: 5,
        maxCols: 5,
      },
    },
    image: {
      class: ImageTool,
      config: {
        endpoints: {
          byFile: `${apiBaseUrl}/api/upload-image`, // Endpoint untuk unggahan file
          byUrl: `${apiBaseUrl}/api/upload-image`, // Endpoint untuk unggahan dari URL
        },
      },
    },
  },
});

window.editor = editor;
