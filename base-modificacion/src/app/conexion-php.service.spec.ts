import { TestBed } from '@angular/core/testing';

import { ConexionPhpService } from './conexion-php.service';

describe('ConexionPhpService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: ConexionPhpService = TestBed.get(ConexionPhpService);
    expect(service).toBeTruthy();
  });
});
