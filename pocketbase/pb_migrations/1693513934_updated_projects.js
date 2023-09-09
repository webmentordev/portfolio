/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ysj6qhcc5ifnw6h")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "0zaf7pan",
    "name": "order",
    "type": "number",
    "required": false,
    "unique": false,
    "options": {
      "min": null,
      "max": null
    }
  }))

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ysj6qhcc5ifnw6h")

  // remove
  collection.schema.removeField("0zaf7pan")

  return dao.saveCollection(collection)
})
