/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const collection = new Collection({
    "id": "3o6nb3js7c8ajpw",
    "created": "2023-08-28 16:09:12.546Z",
    "updated": "2023-08-28 16:09:12.546Z",
    "name": "stacks",
    "type": "base",
    "system": false,
    "schema": [
      {
        "system": false,
        "id": "iyjbgtud",
        "name": "name",
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
  const collection = dao.findCollectionByNameOrId("3o6nb3js7c8ajpw");

  return dao.deleteCollection(collection);
})
