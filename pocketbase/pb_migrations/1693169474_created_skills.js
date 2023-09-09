/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const collection = new Collection({
    "id": "jcumckvi2jamn3q",
    "created": "2023-08-27 20:51:14.011Z",
    "updated": "2023-08-27 20:51:14.011Z",
    "name": "skills",
    "type": "base",
    "system": false,
    "schema": [
      {
        "system": false,
        "id": "iql8aeoe",
        "name": "skill",
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
  const collection = dao.findCollectionByNameOrId("jcumckvi2jamn3q");

  return dao.deleteCollection(collection);
})
