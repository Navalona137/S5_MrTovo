package servlet;

import connexion.Connexion;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import model.Membre;
import model.Service;

public class VerificationLogin extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        String idService = request.getParameter("service");
        String email = request.getParameter("email");
        String mdp = request.getParameter("mdp");
        
        try{
            Connexion con=new Connexion();
            Membre m = new Membre();
            int tailleA = m.rowCount(con.connexPost());
            Membre[] a = m.listAll(con.connexPost());
            for(int i=0; i<a.length; i++){
                Membre mbr = a[i];
                if(mbr.getemail().equals(email) && mbr.getmdp().equals(mdp) && mbr.getidService().equals(idService)){
                    RequestDispatcher dispat = request.getRequestDispatcher("./home.jsp"); 
                    dispat.forward(request,response);
                }
            }
        }catch(Exception e){
            e.printStackTrace();
        }
        
        RequestDispatcher dispat = request.getRequestDispatcher("./index.jsp"); 
        dispat.forward(request,response);
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
