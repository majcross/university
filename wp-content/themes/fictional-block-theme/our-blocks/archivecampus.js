wp.blocks.registerBlockType("ourblocktheme/archivecampus", {
  title: "Fictional University Campus Archive",
  edit: function () {
    return wp.element.createElement("div", { className: "our-placeholder-block" }, "Campus Archive Placeholder")
  },
  save: function () {
    return null
  }
})
