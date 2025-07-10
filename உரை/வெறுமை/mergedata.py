import json

# Load the JSON file
with open("திருக்குறள்.json", "r") as file:
    datalist = json.load(file)

temp = []
for data in datalist:
    # Combine fields (e.g., first_name and last_name into full_name)
    data['Head'] = f"{data['Book']} {data['Class']} {data['Chapter']}"
    data['Data'] = f"{data['L1']}\n{data['L2']}\n\n{data['ta']}"
    # Optionally, remove the original fields
    del data["DKE_Kural"]
    del data["DKE_Meaning"]
    del data["L1"]
    del data["L2"]
    del data["ta"]
    del data["bt"]
    del data["en"]
    del data["hi"]
    del data["te"]
    del data["ml"]
    del data["kn"]
    del data["sa"]
    del data["si"]
    del data["zh"]
    del data["ms"]
    del data["ko"]
    del data["ru"]
    del data["ar"]
    del data["fr"]
    del data["de"]
    del data["sv"]
    del data["la"]
    del data["pl"]
    del data["_number"]
    temp.append(data)


# Save the updated JSON back to the file
with open("திருக்குறள்2.json", "w") as file:
    json.dump(temp, file, indent=4)

print("Fields combined successfully!")
