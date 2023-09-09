/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ysj6qhcc5ifnw6h")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "2b3eiq5i",
    "name": "image",
    "type": "file",
    "required": false,
    "unique": false,
    "options": {
      "maxSelect": 1,
      "maxSize": 5242880,
      "mimeTypes": [],
      "thumbs": [],
      "protected": false
    }
  }))

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ysj6qhcc5ifnw6h")

  // remove
  collection.schema.removeField("2b3eiq5i")

  return dao.saveCollection(collection)
})
