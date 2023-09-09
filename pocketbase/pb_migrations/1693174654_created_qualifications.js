/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const collection = new Collection({
    "id": "l333ez1fqkygsbj",
    "created": "2023-08-27 22:17:34.951Z",
    "updated": "2023-08-27 22:17:34.951Z",
    "name": "qualifications",
    "type": "base",
    "system": false,
    "schema": [
      {
        "system": false,
        "id": "jarsu9pz",
        "name": "title",
        "type": "text",
        "required": false,
        "unique": false,
        "options": {
          "min": null,
          "max": null,
          "pattern": ""
        }
      }
    ],
    "indexes": [],
    "listRule": null,
    "viewRule": null,
    "createRule": null,
    "updateRule": null,
    "deleteRule": null,
    "options": {}
  });

  return Dao(db).saveCollection(collection);
}, (db) => {
  const dao = new Dao(db);
  const collection = dao.findCollectionByNameOrId("l333ez1fqkygsbj");

  return dao.deleteCollection(collection);
})
