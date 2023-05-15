package com.example.wwlproject;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class Order extends AppCompatActivity implements View.OnClickListener {
Button btnMinus,btnPlus,btnCheckOut;
TextView tvCount;
    int c=1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_order);
        btnMinus=findViewById(R.id.btnMinus);
        btnPlus=findViewById(R.id.btnPlus);
        tvCount=findViewById(R.id.tvCount);
        btnCheckOut=findViewById(R.id.btnCheckOut);


      btnMinus.setOnClickListener(this);
        btnPlus.setOnClickListener(this);
        btnCheckOut.setOnClickListener(this);
        if(getIntent().hasExtra("name") && getIntent().hasExtra("description2")){
            String description2 = getIntent().getStringExtra("description2");
            TextView description= findViewById(R.id.tvDescription2);
            description.setText(description2);

            String name2 = getIntent().getStringExtra("name");
            TextView name= findViewById(R.id.tvName);
            name.setText(name2);





        }
    }



    @Override
    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.btnPlus:
                c+=1;
                tvCount.setText(String.valueOf(c));
                break;
            case R.id.btnMinus:
                if (c!=1){  c-=1;
                    tvCount.setText(String.valueOf(c));
                }
                else {
                    c=1;
                    tvCount.setText(String.valueOf(c));
                }
                break;
            case R.id.btnCheckOut: {
                Intent intentCheck = new Intent(Order.this, Purchase.class);
                startActivity(intentCheck);
            }
                break;



        }
    }
}
