package com.example.wwlproject;

import com.google.gson.annotations.SerializedName;

/**
 * Created by haerul on 17/03/18.
 */

public class Contact {

    @SerializedName("id") private int Id;
    @SerializedName("name") private String Name;
    @SerializedName("email") private String Email;
    @SerializedName("description") private String Description;
    public int getId() {
        return Id;
    }

    public String getName() {
        return Name;
    }

    public String getEmail() {
        return Email;
    }
    public String getDescription() {
        return Description;
    }
//
//    public String getImage() {
//        return Image;
//    }

}
