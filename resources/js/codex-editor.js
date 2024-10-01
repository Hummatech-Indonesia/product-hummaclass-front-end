import EditorJS from "@editorjs/editorjs";
import Header from "@editorjs/header";
import ImageTool from "@editorjs/image";
import List from "@editorjs/list";
import Checklist from "@editorjs/checklist";
import LinkTool from "@editorjs/link";

const editor = new EditorJS({
  /**
   * Id of Element that should contain the Editor
   */
  holder: "editorjs",

  /**
   * Available Tools list.
   * Pass Tool's class or Settings object for each Tool you want to use
   */
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
    // linkTool: {
    //   class: LinkTool,
    //   //   config: {
    //   //     endpoint: "http://localhost:8008/fetchUrl", // Your backend endpoint for url data fetching,
    //   //   },
    // },
    // image: {
    //   class: ImageTool,
    //   config: {
    //     endpoints: {
    //       byFile: "http://localhost:8008/uploadFile", // Your backend file uploader endpoint
    //       byUrl: "http://localhost:8008/fetchUrl", // Your endpoint that provides uploading by Url
    //     },
    //   },
    // },
  },
});
