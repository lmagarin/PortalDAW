package com.example.rafael.sibasket;

import android.content.pm.ActivityInfo;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_LANDSCAPE);
        setContentView(R.layout.activity_main);

        Button boton1 = (Button) findViewById(R.id.btn1);
        boton1.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador1 = (TextView) findViewById(R.id.marcador1);
                String valor = marcador1.getText().toString();
                int numero = Integer.parseInt(valor);
                numero = numero + 1;
                valor = String.valueOf(numero);
                marcador1.setText(valor);
                mostrar(1);
            }
        });

        Button boton2 = (Button) findViewById(R.id.btn2);
        boton2.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador1 = (TextView) findViewById(R.id.marcador1);
                String valor = marcador1.getText().toString();
                int numero = Integer.parseInt(valor);
                numero = numero + 2;
                valor = String.valueOf(numero);
                marcador1.setText(valor);
                mostrar(2);
            }
        });

        Button boton3 = (Button) findViewById(R.id.btn3);
        boton3.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador1 = (TextView) findViewById(R.id.marcador1);
                String valor = marcador1.getText().toString();
                int numero = Integer.parseInt(valor);
                numero = numero + 3;
                valor = String.valueOf(numero);
                marcador1.setText(valor);
                mostrar(3);
            }
        });

        Button boton1b = (Button) findViewById(R.id.btn1b);
        boton1b.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador2 = (TextView) findViewById(R.id.marcador2);
                String valor = marcador2.getText().toString();
                int numero = Integer.parseInt(valor);
                numero = numero + 1;
                valor = String.valueOf(numero);
                marcador2.setText(valor);
                mostrar(1);
            }
        });

        Button boton2b = (Button) findViewById(R.id.btn2b);
        boton2b.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador2 = (TextView) findViewById(R.id.marcador2);
                String valor = marcador2.getText().toString();
                int numero = Integer.parseInt(valor);
                numero = numero + 2;
                valor = String.valueOf(numero);
                marcador2.setText(valor);
                mostrar(2);
            }
        });

        Button boton3b = (Button) findViewById(R.id.btn3b);
        boton3b.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador2 = (TextView) findViewById(R.id.marcador2);
                String valor = marcador2.getText().toString();
                int numero = Integer.parseInt(valor);
                numero = numero + 3;
                valor = String.valueOf(numero);
                marcador2.setText(valor);
                mostrar(3);
            }
        });

        Button botonFaltas1 = (Button) findViewById(R.id.btnFaltas1);
        botonFaltas1.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView faltas1 = (TextView) findViewById(R.id.faltas1);
                String valor = faltas1.getText().toString();
                int numero = Integer.parseInt(valor);
                numero = numero + 1;
                valor = String.valueOf(numero);
                faltas1.setText(valor);
            }
        });

        Button botonBajarUno = (Button) findViewById(R.id.btnBajarUno);
        botonBajarUno.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador1 = (TextView) findViewById(R.id.marcador1);
                String valor = marcador1.getText().toString();
                int numero = Integer.parseInt(valor);
                if (numero > 0) {
                    numero = numero - 1;
                    valor = String.valueOf(numero);
                    marcador1.setText(valor);
                }
            }
        });

        Button botonFaltas2 = (Button) findViewById(R.id.btnFaltas2);
        botonFaltas2.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView faltas2 = (TextView) findViewById(R.id.faltas2);
                String valor = faltas2.getText().toString();
                int numero = Integer.parseInt(valor);
                numero = numero + 1;
                valor = String.valueOf(numero);
                faltas2.setText(valor);
            }
        });

        Button botonBajarUnoB = (Button) findViewById(R.id.btnBajarUnoB);
        botonBajarUnoB.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador2 = (TextView) findViewById(R.id.marcador2);
                String valor = marcador2.getText().toString();
                int numero = Integer.parseInt(valor);
                if (numero > 0) {
                    numero = numero - 1;
                    valor = String.valueOf(numero);
                    marcador2.setText(valor);
                }
            }
        });

        Button botonReset = (Button) findViewById(R.id.btnReset);
        botonReset.setOnClickListener(new Button.OnClickListener() {
            public void onClick(View v) {
                TextView marcador1 = (TextView) findViewById(R.id.marcador1);
                TextView marcador2 = (TextView) findViewById(R.id.marcador2);
                TextView faltas1 = (TextView) findViewById(R.id.faltas1);
                TextView faltas2 = (TextView) findViewById(R.id.faltas2);
                String valor1 = marcador1.getText().toString();
                String valor2 = marcador2.getText().toString();
                String valor3 = faltas1.getText().toString();
                String valor4 = faltas2.getText().toString();
                int numero1 = Integer.parseInt(valor1);
                int numero2 = Integer.parseInt(valor2);
                int numero3 = Integer.parseInt(valor3);
                int numero4 = Integer.parseInt(valor4);
                numero1 = numero2 = numero3 = numero4 = 0;
                valor1 = String.valueOf(numero1);
                valor2 = String.valueOf(numero2);
                valor3 = String.valueOf(numero3);
                valor4 = String.valueOf(numero4);
                marcador1.setText(valor1);
                marcador2.setText(valor2);
                faltas1.setText(valor3);
                faltas2.setText(valor4);
            }
        });
    }

    private void mostrar(int puntos){
        Toast.makeText(this, "Canasta!!: +" + puntos, Toast.LENGTH_LONG).show();
    }
}

