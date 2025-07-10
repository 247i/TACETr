import json

json_file = "திருக்குறள்.json"
new_json_file = "திருக்குறள்1.json"
f1 = open(json_file, "r", encoding="utf-8")
rpy = f1.read()
f1.close()
desired_keys = {
    "Book",
    "Class",
    "Chapter",
    "L1",
    "L2",
    "ta",
}

temp = []
for d in json.loads(rpy):
    for (k, v) in d.items():
        if k in desired_keys:
            temp.append({k: v})


#  temp = [{k: v for (k, v) in d.items() if k in desired_keys} for d in json.loads(rpy)]


newstr = json.dumps(
    temp,
    ensure_ascii=False,
)

with open(new_json_file, "w", encoding="utf8") as json_file:
    json.dump(newstr, json_file, ensure_ascii=False)
