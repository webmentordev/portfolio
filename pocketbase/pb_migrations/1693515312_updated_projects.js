/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ysj6qhcc5ifnw6h")

  // remove
  collection.schema.removeField("ohttdyeg")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "xpeoarmz",
    "name": "stacks",
    "type": "text",
    "required": false,
    "unique": false,
    "options": {
      "min": null,
      "max": null,
      "pattern": ""
    }
  }))

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ysj6qhcc5ifnw6h")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "ohttdyeg",
    "name": "tech",
    "type": "editor",
    "required": false,
    "unique": false,
    "options": {}
  }))

  // remove
  collection.schema.removeField("xpeoarmz")

  return dao.saveCollection(collection)
})
