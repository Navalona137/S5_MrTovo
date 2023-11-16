package model;

import java.sql.Date;

public class Personne {
    String id;
    String nom;
    String prenom;
    Date dtn;
    int genre;

    public Personne() {
    }

    public Personne(String id, String nom, String prenom, Date dtn, int genre) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.dtn = dtn;
        this.genre = genre;
    }

    public String getid() {
        return id;
    }

    public String getnom() {
        return nom;
    }

    public String getprenom() {
        return prenom;
    }

    public Date getdtn() {
        return dtn;
    }

    public int getgenre() {
        return genre;
    }

    public void setid(String id) {
        this.id = id;
    }

    public void setnom(String nom) {
        this.nom = nom;
    }

    public void setprenom(String prenom) {
        this.prenom = prenom;
    }

    public void setdtn(Date dtn) {
        this.dtn = dtn;
    }

    public void setgenre(int genre) {
        this.genre = genre;
    }
    
    
    
}
